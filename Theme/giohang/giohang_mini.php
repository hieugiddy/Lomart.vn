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
					echo '<p><i class="fa fa-caret-right mr-2"></i><span>'.$_SESSION['tensanpham'][$i].' <strong>('.$_SESSION['soluong'][$i].' Item)</strong></span>&nbsp;&nbsp;<a href="./Theme/giohang/xoasanpham.php?id='.$_SESSION['sanpham_gh'][$i].'&xoa=" style="color:blue;text-decoration:underline">Xóa</a></p>';
				}
			}
		}
	?>
	</div>
	
	<br><a href="?Layout=baiviet&giohang=" id="thanhtoan">Mua ngay</a>
</div>