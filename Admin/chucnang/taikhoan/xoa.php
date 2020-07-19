<?php
	include('../connect.php');
	//xóa ở trang chi tiết sản phẩm
	$xoa1=$conn->prepare('delete from taikhoan where username="'.$_GET['user'].'"');
	$xoa1->execute();
	header('Location: /Lomart.vn/Admin?menu=taikhoan');
?>