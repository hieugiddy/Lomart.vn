<?php
	include('../connect.php');
	$taikhoan=$conn->prepare('select * from taikhoan where username="'.$_GET['user'].'"');
	$taikhoan->execute();
	$kq=$taikhoan->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thay đổi thông tin tài khoản</title>
</head>
<body>
	<div style="width: 500px;margin: auto;">
	<form action="/Lomart.vn/Admin/chucnang/taikhoan/xulysua.php" method="post">
		<strong>Thay đổi thông tin</strong><br><br>
		<input type="hidden" name="olduser" value="<?php echo $kq['username'] ?>" required/>
		<label>Username:</label>
		<input type="text" name="username" value="<?php echo $kq['username'] ?>" required/><br><br>
		<label>Mật khẩu:</label>
		<input type="password" name="password" value="<?php echo $kq['password'] ?>" required/><br><br>
		<label>Quyền:</label>
		<input type="number" name="quyen" value="<?php echo $kq['quyen'] ?>" min="0" max="1" required/><br><br>
		<input type="submit" value="Thay đổi"/>
	</form>
	</div>
</body>
</html>