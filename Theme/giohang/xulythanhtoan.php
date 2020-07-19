<?php
      ob_start();
      session_start();

      include('../connect.php');
      /*tinh so don hang*/
      $stmt=$conn->prepare('select count(maDH) from donhang');
      $stmt->execute();
      $_SESSION['maDH']='DH'.($stmt->fetchcolumn()+1);

      $_SESSION['hoten']=$_GET['hoten'];
      $_SESSION['email']=$_GET['mail'];
      ($_SESSION['value']=='hn')?($_SESSION['chin']='Hà Nội'):(($_SESSION['value']=='dn')?($_SESSION['chin']='Đà Nẵng'):($_SESSION['chin']='Hồ Chí Minh'));
      $_SESSION['diachi']=$_GET['address2'];
      $_SESSION['sodt']=$_GET['sodt'];
?>

<!DOCTYPE html>
<html>
<head>
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Xử lý thanh toán</title>
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
                  
                  $cmd='insert into donhang(maDH,hoten,email,chinhanh,DiaChiNhanHang,SoDT) value("'.$_SESSION['maDH'].'","'.$_SESSION['hoten'].'","'.$_SESSION['email'].'","'.$_SESSION['chin'].'","'.$_SESSION['diachi'].'","'.$_SESSION['sodt'].'")';
                  $themdonhang=$conn->prepare($cmd);
                  $themdonhang->execute();
                  for($i=0;$i<count($_SESSION['sanpham_gh']);++$i){
                        if($_SESSION['sanpham_gh'][$i]!=""){
                              $tt=$_SESSION['soluong'][$i]*$_SESSION['dongia'][$i];
                              $chen = $conn->prepare('INSERT INTO chitietdonhang (maDH, maSP, soluong,thanhtien) values ("'.$_SESSION['maDH'].'", '.$_SESSION['sanpham_gh'][$i].', '.$_SESSION['soluong'][$i].', '.$tt.')');
                              $chen->execute();

                              $update = $conn->prepare('UPDATE chitietsanpham set soluong=soluong-'.$_SESSION['soluong'][$i].' where maSP='.$_SESSION['sanpham_gh'][$i]);
                              $update->execute();
                        }
                  }
                  unset($_SESSION['sanpham_gh']);
                  unset($_SESSION['soluong']);
                  unset($_SESSION['dongia']);
                  unset($_SESSION['tensanpham']);
                  unset($_SESSION['maDH']);
                  unset($_SESSION['hoten']);
                  unset($_SESSION['email']);
                  unset($_SESSION['chin']);
                  unset($_SESSION['diachi']);
                  unset($_SESSION['sodt']);
                  echo '
                  <script>
                        alert("Đặt hàng thành công");
                        location.href=\'/Lomart.vn\';
                  </script>';
            ?>
      </div>
</body>
</html>
<?php
      $conn=null;
?>