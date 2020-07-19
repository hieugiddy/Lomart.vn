<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Quản Trị Website</title>
	<?php include('head.php'); ?>
	<?php
		if(!isset($_COOKIE['user'])){
			header('Location: /Lomart.vn/Theme/Tai_Khoan/dangnhap.php');
		}
		if(isset($_GET['menu']))
			echo '<style>#'.$_GET['menu'].'{background-color: #222}</style>';
		else
			echo '<style>#home{background-color: #222}</style>';
	?>
</head>
<body>
	<div class="sidebar">
	  <div class="tab">
		  <button class="tablinks" id="home" onclick="home()"><i class="fa fa-home d-block my-2"></i>Dashboard</button>
		  <button class="tablinks" id="theloai" onclick="theloai()"><i class="fa fa-list d-block my-2"></i>Thể Loại</button>
		  <button class="tablinks" id="sanpham" onclick="sanpham()"><i class="fa fa-edit d-block my-2"></i>Sản Phẩm</button>
		  <button class="tablinks" id="donhang" onclick="donhang()"><i class="fa fa-file d-block my-2"></i>Đơn Hàng</button>
		  <button class="tablinks" id="taikhoan" onclick="taikhoan()"><i class="fa fa-user d-block my-2"></i>Tài Khoản</button>
		  <button class="tablinks" id="khuyenmai" onclick="khuyenmai()"><i class="fa fa-tags d-block my-2"></i>Khuyến mãi</button>
		  <button class="tablinks" id="caidat" onclick="caidat()"><i class="fa fa-cogs d-block my-2"></i>Cài Đặt</button>
		  <button class="tablinks" onclick="thoat()"><i class="fa fa-times-circle d-block my-2"></i>Thoát</button>
	  </div>
	</div>

	<!-- Page content -->
	<div class="content">
		<?php 
			include('dieuhuong.php');
		?>
	</div>
</body>
	<?php include('footer.php'); ?>
</html>