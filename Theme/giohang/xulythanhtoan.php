<?php 
ob_start();
session_start();
      $_SESSION['thongtindonhang'][0]=$_GET['hoten'];
      $_SESSION['thongtindonhang'][1]=$_GET['mail'];
      $_SESSION['thongtindonhang'][2]=$_GET['address1'];
      $_SESSION['thongtindonhang'][3]=$_GET['address2'];
      $_SESSION['thongtindonhang'][4]=$_GET['sodt'];
      $_SESSION['thongtindonhang'][5]=((int) $_GET['tongtien'])/20000;
?>
<!DOCTYPE html>
<html>
<head>
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Thanh toán qua Paypal</title>
      <style>
            #wrapper{
                  width: 500px;
                  margin: auto;
            }

            input {
                  background-color: #fff;
                  font-family: Roboto;
                  font-size: 15px;
                  font-weight: 400;
                  margin-left: 12px;
                  margin-top: 10px;
                  padding: 3px 7px;
                  text-overflow: ellipsis;
                  width: 300px;
                  border: 1px solid #999;
                  border-radius: 5px;
                  color: #000;
            }
            #thanhtoan{
                  background: #911;
                  color: #fff;
                  border:none;
                  padding: 6px 10px;
                  margin: 40px 0 0 0
            }
            #tien{
                  width: 80px;
                  color: red;
                  font-weight: 700;
                  margin-top: 30px
            }
      </style>
</head>
<body>
      <div id="wrapper">
            <?php
                  if($_GET['hinhthuc']=="01")
                        echo '
                  <script>
                        alert("Thanh toán thành công");
                        location.href=\'/Lomart.vn\';
                  </script>';
                  else
                        include('paypal.php');
            ?>
      </div>
</body>
</html>