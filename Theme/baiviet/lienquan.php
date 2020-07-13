<h4 class="mt-5 mb-3">Sản phẩm cùng loại</h4>
<div class="row">
<?php 
	$lienquan=$conn->prepare('select chitietsanpham.maSP,tenSP,hinhanh,dongia from sanpham,chitietsanpham where chitietsanpham.maSP=sanpham.maSP and maTL="'.$info['maTL'].'" and sanpham.maSP not in("'.$_GET['id'].'") order by chitietsanpham.maSP DESC limit 6');
	$lienquan->execute();
	while ($row=$lienquan->fetch(PDO::FETCH_ASSOC)) {
		echo '
			<a href="?Layout=baiviet&id='.$row['maSP'].'" class="link-item" title="'.$row['tenSP'].'">
				<div class="yeuthich_item col-6 col-sm-4 col-md-3 col-lg-2 mb-4 px-2">
					<div><img src="'.$row['hinhanh'].'" alt="'.$row['tenSP'].'" width="100%" class="hot_img"/>
					<p>'.$row['tenSP'].'</p>
					<strong>'.$row['dongia'].' đ</strong>
					<a href="./Theme/giohang/themsanpham.php?id='.$row['maSP'].'&soluong=1" class="them-sp">+Thêm</a></div>
				</div>
			</a>
		';
	}
?>
</div>
	