<?php
	if(isset($_GET['Layout'])) $layout=$_GET['Layout']; else $layout="";
	switch ($layout) {
		case 'chuyenmuc':
			include('chuyenmuc/index.php');
			break;
		case 'baiviet':
			include('baiviet/index.php');
			break;
		case 'timkiem':
			include('timkiem/index.php');
			break;
		case 'khuyenmai':
			include('khuyenmai/index.php');
			break;
		default:
			include('home/index.php');
			break;
	}
?>