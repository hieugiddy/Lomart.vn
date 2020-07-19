<?php
	include('./chucnang/connect.php');
	$info=$conn->prepare('select luottruycap from info');
	$info->execute();

	$sanpham=$conn->prepare('select count(maSP) from sanpham');
	$sanpham->execute();

	$donhang=$conn->prepare('select count(maDH) from donhang');
	$donhang->execute();

	$taikhoan=$conn->prepare('select count(username) from taikhoan');
	$taikhoan->execute();
?>
<div id="dashboard" class="tabcontent">
<div class="row mb-5">
	<div class="col-3 px-2">
		<div class="trangthai" id="luottruycap">
			<img src="/Lomart.vn/img/chart.png" alt=""/>
			<p>
				<span style="font-size: 44px"><?php echo $info->fetchcolumn(); ?></span>
				<span style="font-size: 21px"><i style="font-size: 35px" class="fa fa-arrow-up"></i><br>Lượt truy cập</span>
			</p>
		</div>
	</div>
	<div class="col-3 px-2">
		<div class="trangthai" id="soluong_sp">
			<img src="/Lomart.vn/img/chart.png" alt=""/>
			<p>
				<span style="font-size: 44px"><?php echo $sanpham->fetchcolumn(); ?></span>
				<span style="font-size: 21px"><i style="font-size: 35px" class="fa fa-arrow-up"></i><br>Sản phẩm</span>
			</p>
		</div>
	</div>
	<div class="col-3 px-2">
		<div class="trangthai" id="daban">
			<img src="/Lomart.vn/img/chart.png" alt=""/>
			<p>
				<span style="font-size: 44px"><?php echo $donhang->fetchcolumn(); ?></span>
				<span style="font-size: 21px"><i style="font-size: 35px" class="fa fa-arrow-up"></i><br>Đã bán</span>
			</p>
		</div>
	</div>
	<div class="col-3 px-2">
		<div class="trangthai" id="kh">
			<img src="/Lomart.vn/img/chart.png" alt=""/>
			<p>
				<span style="font-size: 44px"><?php echo $taikhoan->fetchcolumn(); ?></span>
				<span style="font-size: 21px"><i style="font-size: 35px" class="fa fa-arrow-up"></i><br>Tài Khoản</span>
			</p>
		</div>
	</div>
</div>

<div class="row mt-5">
	<div class="col-8 px-2">
		<iframe style="width: 100%; height: 550px; overflow: hidden;" src="https://playpager.com/embed/chess/index.html" scrolling="no"></iframe>
	</div>
	<div class="col-4">
		<iframe src="https://www6.cbox.ws/box/?boxid=845270&boxtag=yLtqS7" width="100%" height="550" allowtransparency="yes" allow="autoplay" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto" ></iframe> 
	</div>
</div>
</div>