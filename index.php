<?php
ob_start();
session_start();
include('Theme/connect.php');
$info=$conn->prepare('select * from info');
$info->execute();
$kq_if=$info->fetch(PDO::FETCH_ASSOC);

//tính lượt truy cập
$info=$conn->prepare('select luottruycap from info');
$info->execute();
$view_c=$info->fetchcolumn();
$view_n=(int)($view_c+1);

$tangtruycap=$conn->prepare('update info set luottruycap='.$view_n);
$tangtruycap->execute();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8"/>
	<meta name="description" content="<?php echo $kq_if['mota']; ?>">
	<meta name="keywords" content="<?php echo $kq_if['tukhoa']; ?>">
	<link rel="shortcut icon" type="image/png" href="<?php echo $kq_if['favicon']; ?>"/>
	<title>
	<?php
		if(!isset($_GET['Layout']))
			echo $kq_if['tieude'];
		else{
			switch ($_GET['Layout']) {
				case 'chuyenmuc':
					echo 'Danh mục | '.$kq_if['tieude'];
					break;
				case 'baiviet':
					echo 'Chi tiết sản phẩm | '.$kq_if['tieude'];
					break;
				case 'timkiem':
					echo 'Tìm kiếm sản phẩm | '.$kq_if['tieude'];
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
