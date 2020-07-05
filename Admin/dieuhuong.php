<?php
	if(isset($_GET['menu'])) $layout=$_GET['menu']; else $layout="";
	switch ($layout) {
		case 'theloai':
			include('chucnang/theloai/index.php');
			break;
		case 'sanpham':
			include('chucnang/sanpham/index.php');
			break;
		case 'khachhang':
			include('chucnang/khachhang/index.php');
			break;
		case 'donhang':
			include('chucnang/donhang/index.php');
			break;
		case 'caidat':
			include('chucnang/caidat/index.php');
			break;
		default:
			echo '
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
		</div>';
			break;
	}
?>