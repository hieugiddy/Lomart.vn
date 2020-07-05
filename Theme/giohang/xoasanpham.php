<?php
ob_start();
session_start();
	$id=$_GET['id'];
	if(isset($_GET['xoa'])){
	for($i=0;$i<count($_SESSION['sanpham_gh']);++$i){
		if($_SESSION['sanpham_gh'][$i]==$id){
			$_SESSION['sanpham_gh'][$i]="";
			}
		}
	}
	echo '
<script>
	history.back();
</script>';
?>