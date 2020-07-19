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
	$maSP=$_POST['maSP'];
	$tensp=$_POST['tensp'];
	$maTL=$_POST['chontl'];
	$soluong=$_POST['soluong'];
	$dongia=$_POST['giaban'];
	$mota=$_POST['mota'];
	(isset($_POST['noibat']))?($hot=1):($hot=0);
	$uutien=$_POST['uutien'];
	
	if(isset($_POST['maTLC']))
		$cmd='update sanpham set tenSP="'.$tensp.'",maTL='.$maTL.',maTLC='.$_POST['maTLC'].' where maSP='.$maSP;
	else
		$cmd='update sanpham set tenSP="'.$tensp.'",maTL='.$maTL.' where maSP='.$maSP;
	//update 1 dóng vào bảng sanpham
	$sanpham=$conn->prepare($cmd);
	$sanpham->execute();

	//update 1 dòng vào bảng chitietsanpham
	$chitietsanpham=$conn->prepare('update chitietsanpham set maSP='.$maSP.',dongia='.$dongia.',mota=\''.$mota.'\',soluong='.$soluong.',hinhanh="'.$hinhanh.'",hot='.$hot.',uutien='.$uutien.' where maSP='.$maSP);
	$chitietsanpham->execute();

	echo '<script>
			alert("Cập nhật thông tin thành công"); 
			location.href=\'/Lomart.vn/Admin/?menu=sanpham\';
		</script>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xử lý sửa sản phẩm</title>
</head>
<body>
	
</body>
</html>