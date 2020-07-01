<?php
	include('../connect.php');
	$user=$_POST['tentk'];
	$pw=$_POST['mk'];
	$cmd=@mysqli_query($connect,'select quyen from taikhoan where username="'.$user.'" and password="'.$pw.'"');
	$kq=@mysqli_fetch_array($cmd);
	if(@mysqli_num_rows($cmd)<=0){
		echo '<script>alert(\'Tài khoản hoặc mật khẩu không tồn tại\');</script>';
	}
	else
		echo '<script>
		if (typeof(Storage) !== "undefined") {
			localStorage.setItem("user","'.$user.'");
			localStorage.setItem("pw","'.$pw.'");
			localStorage.setItem("quyenhan","'.$kq['quyen'].'");
		}
	alert(\'Đăng nhập thành công\');</script>';
	echo '<script>location.href=\'/Lomart.vn\';</script>'
	
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>