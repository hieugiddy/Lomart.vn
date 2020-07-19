<?php
	include('../connect.php');
	//xóa ở trang chi tiết sản phẩm
	$xoa1=$conn->prepare('delete from chitietsanpham where maSP='.$_GET['maSP']);
	$xoa1->execute();
	//xóa ở trang sản phẩm
	$xoa1=$conn->prepare('delete from sanpham where maSP='.$_GET['maSP']);
	$xoa1->execute();
	header('Location: /Lomart.vn/Admin?menu=sanpham');
?>