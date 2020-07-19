<?php
	include('../connect.php');
	// upload hinh anh	
	$icon=$_FILES['image']['name'];//lấy tên file ảnh, để lấy được $_FILES thì form phải có  enctype="multipart/form-data"
    $fileanh=$_FILES['image']['tmp_name'];//noi luu tạm file anh
    move_uploaded_file($fileanh,"c://wamp/www/Lomart.vn/img/".$icon); //move_uploaded_file(fileanh,thư mục sẽ upload lên)

	$hinhanh='/Lomart.vn/img/'.$icon;
	$cmd='insert into khuyenmai(tenkm,hinhanh,noidung) values("'.$_POST['tenkm'].'","'.$hinhanh.'",\''.$_POST['mota'].'\')';
	$sanpham=$conn->prepare($cmd);
	$sanpham->execute();

	echo '<script>
			location.href=\'/Lomart.vn/Admin/?menu=khuyenmai\';
		</script>';
?>