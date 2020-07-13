<?php
	include('../connect.php');
	$user=$_POST['tentk'];
	$pw=$_POST['mk'];
	$cmd=('select * from taikhoan where username="'.$user.'" and password="'.$pw.'"');
	/*tạo 1 biến statement sử dụng cơ chế bảo mật Prepare để thực hiện câu truy vấn - giúp tránh được tấn công Sql*/
	$stmt=$conn->prepare($cmd);
	/*thực hiện câu truy vấn*/
	$stmt->execute();
	/* đếm số dòng trả về*/
	if($stmt->rowCount()<=0){
		echo '<script>alert(\'Tài khoản hoặc mật khẩu không tồn tại\');</script>';
	}
	else{
		/*thiết lập cách trả về dữ liệu - FETCH_ASSOC trả về dữ liệu dạng mảng với key là tên cột trong bảng*/
		$kq=$stmt->fetch(PDO::FETCH_ASSOC);
		echo '<script>
		if (typeof(Storage) !== "undefined") {
			localStorage.setItem("user","'.$user.'");
			localStorage.setItem("pw","'.$pw.'");
			localStorage.setItem("quyenhan","'.$kq['quyen'].'");
		}
	alert(\'Đăng nhập thành công\');</script>';
	}
	$conn=null;
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