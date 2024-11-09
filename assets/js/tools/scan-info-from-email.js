    var cookielist;
    var maillist;
    var thread;
    var live;
    var die;
    var flag;
    var load;
      function start(){
        cookielist = deduplicate($('#listcookie').val().trim().split("\n"));
        $('#listcookie').val(cookielist.join("\n"));
        maillist = deduplicate($('#listemail').val().trim().split("\n"));
        $('#listemail').val(maillist.join("\n"));
        max_thread = $('#thread').val();
        total = maillist.length;
        if(!$('#listcookie').val()){
        Toast.fire({icon: 'error',title: 'Vui Lòng Nhập List Cookie'});            
        }else if(!$('#listemail').val()){
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
    run(cookielist[Math.floor(Math.random() * cookielist.length)],maillist[j]);
    }
    },delay * i);
    })(i);  
    }
    }else{
    for (var i = 0; i < total; i++) {
    run(cookielist[Math.floor(Math.random() * cookielist.length)],maillist[i]);
    }   
    }
    }
   async function run(cookie,email){    
      if(!flag){
      return;
      }else{
       update(email,"#listemail");
      await request(cookie,email);
       ++load;
      if(load == total){
      wait(false);
      Toast.fire({icon: 'success',title: 'Đã Lọc Xong'});  
      flag = false;
      return;
      }  
      }
    }
   function request(cookie,email){
      if(!$('#listcookie').val().trim()){
        wait(false);
        Toast.fire({icon: 'error',title: 'Vui Lòng Nhập List Cookie'});        
        flag = false;  
        return;
      }else{
      $.ajax({
      url: api,
      type: "POST",
      dataType: "json",
      data: {cookie: cookie, email:email},
      success: function (response){
          if(response.status == true) {
          $('#live').html(++live);
          $('#list-live').append(response.msg + "\n");
          toastr["success"](email,"Scan Thành Công");
          }else if(response.status == false){
          $('#die').html(++die);
          $('#list-die').append(response.msg + "\n");
          toastr["error"](email,"Scan Thất Bại");
          }else{
          update(cookie,"#listcookie");
          $('#error').html(++error);  
          toastr["warning"](email,"Scan Lỗi");  
          }
      },
      error: function (xhr, textStatus, thrownError) {
      exitError(xhr.status);           
      }         
      })  
      }
    }