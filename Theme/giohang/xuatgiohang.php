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
if(isset($_GET['xoa'])){
	for($i=0;$i<count($_SESSION['sanpham_gh']);++$i){
		if($_SESSION['sanpham_gh'][$i]==$id){
			$_SESSION['sanpham_gh'][$i]="";
		}
	}
}
else{
	if(isset($_SESSION['sanpham_gh'])){
		if(ktr_tontai($id)!=1){
			$_SESSION['sanpham_gh'][count($_SESSION['sanpham_gh'])]=$id;
		}
	}
	else
		$_SESSION['sanpham_gh'][0]=$id;
}
?>
<div id="giohang">
	<h4>Giỏ hàng</h4><hr>
	<div id="spgiohang">
	<?php
		if(!isset($_SESSION['sanpham_gh'])){
			echo 'Không có sản phẩm nào';
		}
		else{
			for($i=0;$i<count($_SESSION['sanpham_gh']);++$i){
				if(!$_SESSION['sanpham_gh'][$i]==""){
				echo '<span>'.$_SESSION['sanpham_gh'][$i].'</span>&nbsp;&nbsp;'.'<a href="?Layout=baiviet&id='.$_SESSION['sanpham_gh'][$i].'&xoa=1">Xóa</a><br/>';
			}
		}
		}
	?>
	</div>
	<div id="tongtien">
		<span style="text-align: left;position: absolute;bottom:55px;left: 10px"><strong>Tổng:</strong>&nbsp;(Tạm tính)</span>
		<span style="text-align: right;color: red;position: absolute;bottom:55px;right: 10px;">~ 0 VNĐ</span>
	</div>
	<br><a href="?Layout=baiviet&thanhtoan=1" id="thanhtoan">Thanh toán</a>
</div>