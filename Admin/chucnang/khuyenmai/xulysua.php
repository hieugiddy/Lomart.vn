<?php
	include('../connect.php');
	// upload hinh anh	
	$icon=$_FILES['image']['name'];//lấy tên file ảnh, để lấy được $_FILES thì form phải có  enctype="multipart/form-data"
	if ($icon!="") {
		$fileanh=$_FILES['image']['tmp_name'];//noi luu tạm file anh
	    move_uploaded_file($fileanh,"c://wamp/www/Lomart.vn/img/".$icon); //move_uploaded_file(fileanh,thư mục sẽ upload lên)
	    $hinhanh='/Lomart.vn/img/'.$icon;
	}
	else
		$hinhanh=$_POST['linkhinh'];

	$khuyenmai=$conn->prepare('update khuyenmai set tenkm="'.$_POST['tenkm'].'",hinhanh="'.$hinhanh.'",noidung=\''.$_POST['mota'].'\' where stt='.$_POST['maKM']);
	$khuyenmai->execute();

	echo '<script> 
			location.href=\'/Lomart.vn/Admin/?menu=khuyenmai\';
		</script>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xử lý sửa khuyến mãi</title>
</head>
<body>
	
</body>
</html>