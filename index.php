<?php
ob_start();
session_start();
include('Theme/connect.php');
	?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8"/>
	<title>
	<?php
		if(!isset($_GET['Layout']))
			echo 'Lomart - Siêu thị Online';
		else{
			switch ($_GET['Layout']) {
				case 'chuyenmuc':
					echo 'Danh mục - Siêu thị Online';
					break;
				case 'baiviet':
					echo 'Chi tiết sản phẩm - Siêu thị Online';
					break;
				case 'timkiem':
					echo 'Tìm kiếm sản phẩm - Siêu thị Online';
					break;
			}
		}
?>
	</title>
	<?php include('Theme/head.php');?>
</head>
<body onload="tinh_khoang_cach()">
	<?php include('Theme/header.php');?>
	<?php include('Theme/dieuhuong.php');?>
	</div>
</body>
<?php include('Theme/footer.php'); ?>
</html>
