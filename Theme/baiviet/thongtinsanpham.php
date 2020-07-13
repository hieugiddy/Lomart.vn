<?php 
	$thongtinsp=$conn->prepare('select tenSP,hinhanh,dongia,soluong,mota,maTL from sanpham,chitietsanpham where chitietsanpham.maSP=sanpham.maSP and sanpham.maSP="'.$_GET['id'].'"');
	$thongtinsp->execute();
	$info=$thongtinsp->fetch(PDO::FETCH_ASSOC);
	($info['soluong']!=0)?($sl_min=1):($sl_min=0);
	$sl_max=$info['soluong'];
?>
<div id="start-ctsp" class="row">
	<img <?php echo 'src="'.$info['hinhanh'].'" alt="'.$info['tenSP'].'"' ;?> class="col-3"/>
	<div class="col-9">
		<p><strong><?php echo $info['tenSP']; ?></strong></p>
		<p id="giatien" style="color:red;font-weight: 800"><?php echo $info['dongia'].' đ';?></p>
		<p>Số lượng còn trong kho: <?php echo $sl_max;?></p>
	<form action="./Theme/giohang/themsanpham.php" class="mt-3">
		<input type="hidden" name="id" <?php echo 'value="'.$_GET['id'].'"'; ?> />
		<input type="number" name="soluong" <?php echo 'value="'.$sl_min.'" min="'.$sl_min.'" max="'.$sl_max.'"';?> style="padding: 2px;width: 60px;" step="1" required/>
		<input type="submit" value="Thêm vào giỏ hàng" style="padding: 6px 10px; border:0;color: #fff;background: #900;cursor: pointer;" />
	</form>
	</div>
</div>		
<h4 class="mt-5 mb-3" style="margin-left: -10px">Mô tả sản phẩm</h4>
<div id="gt-ctsp" class="row text-justify">
<?php echo $info['mota']; ?>
</div>
