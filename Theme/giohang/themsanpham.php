<?php

	$id=$_GET['id'];
function ktr_tontai($id){
	for($i=0;$i<count($_SESSION['sanpham_gh']);++$i){
		if($_SESSION['sanpham_gh'][$i]==$id){
			return 1;
		}
	}
	return 0;
}
if(isset($_SESSION['sanpham_gh'])){
	

	if(ktr_tontai($id)!=0){
		$_SESSION['sanpham_gh'][count($_SESSION['sanpham_gh'])]=$id;
	}
}
else
	$_SESSION['sanpham_gh'][0]=$id;
for($i=0;$i<count($_SESSION['sanpham_gh']);++$i){
	echo $_SESSION['sanpham_gh'][$i];
}
?>