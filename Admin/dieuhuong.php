<?php
	if(isset($_GET['menu'])) $layout=$_GET['menu']; else $layout="";
	switch ($layout) {
		case 'theloai':
			include('chucnang/theloai/index.php');
			break;
		case 'sanpham':
			include('chucnang/sanpham/index.php');
			break;
		case 'taikhoan':
			include('chucnang/taikhoan/index.php');
			break;
		case 'donhang':
			include('chucnang/donhang/index.php');
			break;
		case 'khuyenmai':
			include('chucnang/khuyenmai/index.php');
			break;
		case 'caidat':
			include('chucnang/caidat/index.php');
			break;
		default:
			include('chucnang/dashboard.php');
			break;
	}
?>