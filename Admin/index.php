<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Quản Trị Website</title>
	<?php include('head.php'); ?>
</head>
<body>
	<div class="sidebar">
	  <div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'dashboard')" id="defaultOpen"><i class="fa fa-home d-block my-2"></i>Dashboard</button>
		  <button class="tablinks" onclick="openCity(event, 'chuyenmuc')"><i class="fa fa-list d-block my-2"></i>Thể Loại</button>
		  <button class="tablinks" onclick="openCity(event, 'sanpham')"><i class="fa fa-edit d-block my-2"></i>Sản Phẩm</button>
		  <button class="tablinks" onclick="openCity(event, 'donhang')"><i class="fa fa-file d-block my-2"></i>Đơn Hàng</button>
		  <button class="tablinks" onclick="openCity(event, 'khachhang')"><i class="fa fa-user d-block my-2"></i>Khách Hàng</button>
		  <button class="tablinks" onclick="thoat()"><i class="fa fa-times-circle d-block my-2"></i>Thoát</button>
	  </div>
	</div>

	<!-- Page content -->
	<div class="content">
		<div id="dashboard" class="tabcontent">
		  <div class="row mb-5">
		  	<div class="col-3 px-2">
		  		<div class="trangthai" id="luottruycap">
		  			<img src="/Lomart.vn/img/chart.png" alt=""/>
		  			<p>
		  				<span style="font-size: 44px">850</span>
		  				<span style="font-size: 21px"><i style="font-size: 35px" class="fa fa-arrow-up"></i><br>Lượt truy cập</span>
		  			</p>
		  		</div>
		  	</div>
		  	<div class="col-3 px-2">
		  		<div class="trangthai" id="soluong_sp">
		  			<img src="/Lomart.vn/img/chart.png" alt=""/>
		  			<p>
		  				<span style="font-size: 44px">364</span>
		  				<span style="font-size: 21px"><i style="font-size: 35px" class="fa fa-arrow-up"></i><br>Sản phẩm</span>
		  			</p>
		  		</div>
		  	</div>
		  	<div class="col-3 px-2">
		  		<div class="trangthai" id="daban">
		  			<img src="/Lomart.vn/img/chart.png" alt=""/>
		  			<p>
		  				<span style="font-size: 44px">124</span>
		  				<span style="font-size: 21px"><i style="font-size: 35px" class="fa fa-arrow-up"></i><br>Đã bán</span>
		  			</p>
		  		</div>
		  	</div>
		  	<div class="col-3 px-2">
		  		<div class="trangthai" id="kh">
		  			<img src="/Lomart.vn/img/chart.png" alt=""/>
		  			<p>
		  				<span style="font-size: 44px">100</span>
		  				<span style="font-size: 21px"><i style="font-size: 35px" class="fa fa-arrow-up"></i><br>Khách hàng</span>
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


		<div id="chuyenmuc" class="tabcontent">
		  <h3>London</h3>
		  <p>London is the capital city of England.</p>
		</div>


		<div id="sanpham" class="tabcontent">
		  <h3>Paris</h3>
		  <p>Paris is the capital of France.</p> 
		</div>


		<div id="donhang" class="tabcontent">
		  <h3>Tokyo</h3>
		  <p>Tokyo is the capital of Japan.</p>
		</div>


		<div id="khachhang" class="tabcontent">
		  <h3>khachhang</h3>
		  <p>Tokyo is the capital of Japan.</p>
		</div>
	</div>
</body>
	<?php include('footer.php'); ?>
</html>