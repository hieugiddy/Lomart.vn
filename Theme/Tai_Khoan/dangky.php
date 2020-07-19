<br>
<p id="ketqua"></p>
<div class="form-group" >
  <form action="./Theme/Tai_Khoan/xuly_dangky.php" method="post">
    <label>Username</label>
    <input type="text" id="user" name="tentk" class="form-control" placeholder="Username" value="" required>
    <label>Password</label>
  	<input type="password" id="psw" name="mk" class="form-control" placeholder="Password" value="" required>
  </form>
  <button class="btn btn-primary mt-3" onclick="load_ajax()">Đăng ký</button>
</div>

<script>
  function load_ajax(){
    var tk=document.getElementById('user');
    var mk=document.getElementById('psw');
      $.ajax({
          url : "/Lomart.vn/Theme/Tai_Khoan/xuly_dangky.php",
          type : "post",
          dataType:"text",
          data : {
               username : tk.value,
               matkhau: mk.value
          },
          success : function (result){
              $('#ketqua').html(result);
          }
      });
  }
</script>