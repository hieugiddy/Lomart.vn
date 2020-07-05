<?php
ob_start();
session_start();
	$id=$_GET['id'];
	$sl=$_GET['soluong'];
function ktr_tontai($id){
	for($i=0;$i<count($_SESSION['sanpham_gh']);++$i){
		if($_SESSION['sanpham_gh'][$i]==$id){
			return $i;
		}
	}
	return -1;
}

if(isset($_SESSION['sanpham_gh'])){
	if(ktr_tontai($id)==-1){
		$_SESSION['sanpham_gh'][count($_SESSION['sanpham_gh'])]=$id;
		$_SESSION['soluong'][count($_SESSION['sanpham_gh'])]=(int)$sl;
	}
	else
		$_SESSION['soluong'][ktr_tontai($id)]+=(int)$sl;
}
else{
	$_SESSION['sanpham_gh'][0]=$id;
	$_SESSION['soluong'][0]=$sl;
}
echo '
<script>
	history.back();
</script>';
?>