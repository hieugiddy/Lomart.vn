<?php
	include('../connect.php');
	$taikhoan=$conn->prepare('update taikhoan set username="'.$_POST['username'].'", password="'.$_POST['password'].'",quyen='.$_POST['quyen'].' where username="'.$_POST['olduser'].'"');
	$taikhoan->execute();
	header('Location: /Lomart.vn/Admin?menu=taikhoan');
?>