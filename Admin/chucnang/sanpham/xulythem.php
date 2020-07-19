<?php
	if($_POST['chontl']=="")
		echo '
		<script>
			alert("Bạn chưa chọn Thể loại");
			history.back();
		</script>
		';
	else{
		include('../connect.php');
		// upload hinh anh	
		$icon=$_FILES['image']['name'];//lấy tên file ảnh, để lấy được $_FILES thì form phải có  enctype="multipart/form-data"
	    $fileanh=$_FILES['image']['tmp_name'];//noi luu tạm file anh
	    move_uploaded_file($fileanh,"c://wamp/www/Lomart.vn/img/".$icon); //move_uploaded_file(fileanh,thư mục sẽ upload lên)

		$tensp=$_POST['tensp'];
		$maTL=$_POST['chontl'];
		$hinhanh='/Lomart.vn/img/'.$icon;
		$soluong=$_POST['soluong'];
		$dongia=$_POST['giaban'];
		$mota=$_POST['mota'];
		(isset($_POST['noibat']))?($hot=1):($hot=0);
		$uutien=$_POST['uutien'];
		
		if(isset($_POST['maTLC']))
			$cmd='insert into sanpham(tenSP,maTL,maTLC) values("'.$tensp.'",'.$maTL.','.$_POST['maTLC'].')';
		else
			$cmd='insert into sanpham(tenSP,maTL) values("'.$tensp.'",'.$maTL.')';
		//chèn 1 dóng vào bảng sanpham
		$sanpham=$conn->prepare($cmd);
		$sanpham->execute();

		//lấy maSP của sản phẩm vừa chèn
		$run=$conn->prepare('select maSP from sanpham order by maSP DESC limit 1');
		$run->execute();
		$maSP=$run->fetchcolumn();

		//chèn 1 dòng vào bảng chitietsanpham
		$chitietsanpham=$conn->prepare('insert into chitietsanpham values('.$maSP.','.$dongia.',\''.$mota.'\','.$soluong.',"'.$hinhanh.'",'.$hot.','.$uutien.')');
		$chitietsanpham->execute();

		echo '<script>
				alert("Đăng bài thành công"); 
				location.href=\'/Lomart.vn/Admin/?menu=sanpham\';
			</script>';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xử lý thêm sản phẩm</title>
</head>
<body>
	
</body>
</html>