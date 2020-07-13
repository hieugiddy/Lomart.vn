<?php
 if($_POST['tentk']!="" && $_POST['mk']!=""){
	include('../connect.php');
	$cmd='insert into taikhoan(username,password) value("'.$_POST['tentk'].'","'.$_POST['mk'].'")';
	echo '<script>alert(\'Đăng ký thành công, xin mời đăng nhập\');</script>';
}
 else
 	echo '<script>alert(\'Đăng ký không thành công\');</script>';
 echo '<script>location.href=\'/Lomart.vn\';</script>';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Đang ký tài khoản</title>
</head>
<body>
	
</body>
</html>