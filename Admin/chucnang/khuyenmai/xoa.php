<?php
	include('../connect.php');
	$xoa=$conn->prepare('delete from khuyenmai where stt='.$_GET['maKM']);
	$xoa->execute();
	header('Location: /Lomart.vn/Admin?menu=khuyenmai');
?>