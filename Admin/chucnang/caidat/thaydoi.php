<?php
	include('../connect.php');
	// upload hinh anh favicon	
	$favicon_i=$_FILES['favicon']['name'];//lấy tên file ảnh, để lấy được $_FILES thì form phải có  enctype="multipart/form-data"
	if ($favicon_i!="") {
		$favicon_tmp=$_FILES['favicon']['tmp_name'];//noi luu tạm file anh
	    move_uploaded_file($favicon_tmp,"c://wamp/www/Lomart.vn/img/".$favicon_i); //move_uploaded_file(fileanh,thư mục sẽ upload lên)
	    $favicon='/Lomart.vn/img/'.$favicon_i;
	}
	else
		$favicon=$_POST['favicon_c'];

	// upload hinh anh logo	
	$logo_i=$_FILES['logo']['name'];//lấy tên file ảnh, để lấy được $_FILES thì form phải có  enctype="multipart/form-data"
	if ($logo_i!="") {
		$logo_tmp=$_FILES['logo']['tmp_name'];//noi luu tạm file anh
	    move_uploaded_file($logo_tmp,"c://wamp/www/Lomart.vn/img/".$logo_i); //move_uploaded_file(fileanh,thư mục sẽ upload lên)
	    $logo='/Lomart.vn/img/'.$logo_i;
	}
	else
		$logo=$_POST['logo_c'];
	
	$cmd='update info set tieude="'.$_POST['tieude'].'",mota="'.$_POST['mota'].'",tukhoa="'.$_POST['tukhoa'].'",favicon="'.$favicon.'",logo="'.$logo.'"';
	//update 1 dóng vào bảng sanpham
	$info=$conn->prepare($cmd);
	$info->execute();

	echo '<script>
			alert("Cập nhật thông tin thành công"); 
			location.href=\'/Lomart.vn/Admin/?menu=caidat\';
		</script>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xử lý sửa</title>
</head>
<body>
	
</body>
</html>