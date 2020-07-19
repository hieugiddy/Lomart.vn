<?php
ob_start();
session_start();

$id=$_GET['id'];
$sl=$_GET['soluong'];

include('../connect.php');
$getsl=$conn->prepare('select tenSP,soluong,dongia from chitietsanpham,sanpham where chitietsanpham.maSP=sanpham.maSP and sanpham.maSP="'.$id.'"');
$getsl->execute();
$rs=$getsl->fetch(PDO::FETCH_ASSOC);

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
		$index=count($_SESSION['sanpham_gh']);
		$_SESSION['sanpham_gh'][$index]=$id;
		$_SESSION['tensanpham'][$index]=$rs['tenSP'];
		$_SESSION['dongia'][$index]=$rs['dongia'];
		$_SESSION['soluong'][$index]=(int)$sl;
	}
	else{
		$tmp=$_SESSION['soluong'][ktr_tontai($id)]+(int)$sl;
		if($tmp>$rs['soluong'])
			echo '<script>alert("Số lượng sản phẩm bạn vừa thêm vào giỏ hàng, đã vượt quá số lượng sản phẩm còn trong kho");</script>';
		else
			$_SESSION['soluong'][ktr_tontai($id)]+=(int)$sl;
	}
}
else{
	$_SESSION['sanpham_gh'][0]=$id;
	$_SESSION['tensanpham'][0]=$rs['tenSP'];
	$_SESSION['dongia'][0]=$rs['dongia'];
	$_SESSION['soluong'][0]=$sl;
}
echo '
<script>
	history.back();
</script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>