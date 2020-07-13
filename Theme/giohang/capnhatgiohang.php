<?php
ob_start();
session_start();

$id=$_GET['id'];
$sl=$_GET['soluong'];

for($i=0;$i<count($_SESSION['sanpham_gh']);++$i){
	if($_SESSION['sanpham_gh'][$i]==$id){
		$_SESSION['soluong'][$i]=$sl;
	}
}
echo '
<script>
	history.back();
</script>';
?>