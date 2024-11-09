    var cookielist;
    var thread;
    var total;
    var hotmail;
    var yahoo;
    var gmail;
    var other;
    var check; 
    var flag;
    var load;
      function start(){
        cookielist = deduplicate($('#listcookie').val().trim().split("\n"));
        $('#listcookie').val(cookielist.join("\n"));
        max_thread = $('#thread').val();
        total_cookie = cookielist.length;
        if(!$('#listcookie').val()){
        Toast.fire({icon: 'error',title: 'Vui Lòng Nhập List Cookie'});            
        }else if(total > max_input){
        Toast.fire({icon: 'error',title: 'Max '+max_input+' Cookie'});                   
        }else if(!max_thread){
        Toast.fire({icon: 'error',title: 'Vui Lòng Nhập Thread'});                       
        }else if(max_thread < 1 || max_thread > 5){
        Toast.fire({icon: 'error',title: 'Thread 1 -> 5'});                              
        }else{
        thread = parseInt(total_cookie / max_thread);
        total = 0;
        $("#total").html(0);
        hotmail = [];
        yahoo = [];
        gmail = [];
        other = [];
        check = 0;
        flag = true;
        wait(true);
        load = 0;
        run_thread(thread,total_cookie);
        }
    }
    function run_thread(thread,total) {
    if(thread != 0){
    for(var i=0; i<thread; i++){
    (function(i) {
    setTimeout(function() {
    for (var j = parseInt((i / thread) * total); j < parseInt(((i+1) / thread) * total); j++) {
    run(cookielist[j]);
    }
    },delay *i);
    })(i);  
    }
    }else{
    for (var i = 0; i < total; i++) {
    run(cookielist[i]);
    }   
    }
    }
   async function run(cookie){
      if(!flag){
      return;
      }
      update(cookie,"#listcookie");
      await request(cookie);
      ++load;
      if(load == total_cookie){
      wait(false);
      Toast.fire({icon: 'success',title: 'Đã Lọc Xong'});  
      flag = false;
      return;
      }
    }
   function request(cookie){
      $.ajax({
      url: api,
      type: "POST",
      dataType: "json",
      data: {cookie:cookie},
      success: function (response){
          if(response.status == true) {
          dataEmail = response.data;
          totalEmail = dataEmail.length
          total = total + totalEmail;
          $('#total').html(total);
          if(totalEmail){
              toastr["success"]("Scan Thành Công","Thông Báo");
              for(var a = 0; a < totalEmail; a++){
                 xuly(dataEmail[a]);
                 if(check >= total){
     $('#hotmail').val(hotmail.join("\n"));
     $('#total_hotmail').html(hotmail.length);
     $('#yahoo').val(yahoo.join("\n"));
     $('#total_yahoo').html(yahoo.length);
     $('#gmail').val(gmail.join("\n"));
     $('#total_gmail').html(gmail.length);
     $('#other').val(other.join("\n"));
     $('#total_other').html(other.length);
                }
              } 
           }
          }else{
               toastr["error"]("Scan Thất Bại","Thông Báo");
          }
      },
      error: function (xhr, textStatus, thrownError) {
      exitError(xhr.status);           
      }         
      })  
    }
    function xuly(email){
  if(email.match(/(@hotmail.|@outlook.|@live.)/i)){
    hotmail.push(email);
  }else if(email.match(/(@yahoo.)/i)){
    yahoo.push(email);
  }else if(email.match(/(@gmail.)/i)){
    gmail.push(email);
  }else{
    other.push(email);
  }
  ++check;
  }