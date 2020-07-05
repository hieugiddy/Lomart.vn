<div id="giohang">
	<h4>Giỏ hàng</h4><hr>
	<div id="spgiohang">
	<?php
		if(!isset($_SESSION['sanpham_gh'])){
			echo 'Không có sản phẩm nào';
		}
		else{
			for($i=0;$i<count($_SESSION['sanpham_gh']);++$i){
				if($_SESSION['sanpham_gh'][$i]!=""){
				echo '<span>'.$_SESSION['sanpham_gh'][$i].'('.$_SESSION['soluong'][$i].')</span>&nbsp;&nbsp;<a href="./Theme/giohang/xoasanpham.php?id='.$_SESSION['sanpham_gh'][$i].'&xoa=" style="color:blue;text-decoration:underline">Xóa</a><br/>';
			}
		}
		}
	?>
	</div>
	
	<br><a href="?Layout=baiviet&thanhtoan=1" id="thanhtoan">Chi tiết giỏ hàng</a>
</div>