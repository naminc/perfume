    var maillist;
    var thread;
    var live;
    var die;
    var flag;
    var load;
      function start(){
        maillist = deduplicate($('#listemail').val().trim().split("\n"));
        $('#listemail').val(maillist.join("\n"));
        max_thread = $('#thread').val();
        total = maillist.length;
        if(!$('#listemail').val()){
        Toast.fire({icon: 'error',title: 'Vui Lòng Nhập List Email'});            
        }else if(total > max_input){
        Toast.fire({icon: 'error',title: 'Max '+max_input+' Email'});                   
        }else if(!max_thread){
        Toast.fire({icon: 'error',title: 'Vui Lòng Nhập Thread'});                       
        }else if(max_thread < 1 || max_thread > 5){
        Toast.fire({icon: 'error',title: 'Thread 1 -> 5'});                          
        }else{
        thread = parseInt(total / max_thread);
        $("#total").html(total)
        live = 0;
        $('#live').html(0);
        die = 0;
        $('#die').html(0);
        error = 0;
        $('#error').html(0);
        flag = true;
        wait(true);
        load = 0;
        run_thread(thread,total);  
        }
    }
    function run_thread(thread,total) {
    if(thread != 0){
    for(var i=0; i<thread; i++){
    (function(i) {
    setTimeout(function() {
    for (var j = parseInt((i / thread) * total); j < parseInt(((i+1) / thread) * total); j++) {
    run(maillist[j]);
    }
    },delay * Math.floor(Math.random() * i));
    })(i);  
    }
    }else{
    for (var i = 0; i < total; i++) {
    run(maillist[i]);
    }   
    }
    }
   async function run(email){
      if(!flag){
      return;
      }
      update(email,"#listemail");
      await request(email);
      ++load;
      if(load == total){
      wait(false);
      Toast.fire({icon: 'success',title: 'Đã Lọc Xong'});  
      flag = false;
      return;
      }
    }
   function request(email){
      if(getEmail(email)){
      $.ajax({
      url: api,
      type: "POST",
      dataType: "json",
      data: {email:email},
      success: function (response){
          if(response.status == true) {
          $('#live').html(++live);
          $('#list-live').append(email + "\n");
          toastr["success"](email,"Email Đã Đăng Kí");
          }else if(response.status == false){
          $('#die').html(++die);
          $('#list-die').append(email + "\n");
          toastr["error"](email,"Email Chưa Đăng Kí");
          }else{
          $('#error').html(++error);  
          toastr["warning"](email,"Email Lỗi");  
          }
      },
      error: function (xhr, textStatus, thrownError) {
      exitError(xhr.status);           
      }         
      }) 
      }else{
      toastr["info"](email,"Email Sai Định Dạng");     
      }
    }