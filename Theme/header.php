<div id="wrapper">
<?php include('Header/menu_ngang_1.php'); ?>
<?php include('Header/menu_ngang_2.php');?>
<?php include('Header/banner.php'); ?>

<?php
	if(isset($_SESSION['sanpham_gh'])){
		$giohang_sl=0;
		for($i=0;$i<count($_SESSION['sanpham_gh']);++$i){
			if($_SESSION['sanpham_gh'][$i]!="")
				$giohang_sl+=$_SESSION['soluong'][$i];
		}
	}
	else
		$giohang_sl=0;
?>
<div id="giohang_f">
	<a href="?Layout=baiviet&giohang=">
		<span class="btn bg-light-gray text-black btn-cart px-1"><i class="fa fa-shopping-cart"></i><span class="quantity"><?php echo $giohang_sl; ?></span></span>
	</a>
</div>
