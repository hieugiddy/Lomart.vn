<div id="home" class="col-12 col-sm-11 col-xl-9 mx-auto">
	<iframe src="./Theme/home/slide.php" frameborder="0" width="100%" height="250px" style="overflow:hidden;background: #f1f1f1;padding: 10px 0"></iframe>

	<div id="yeuthich">
		<h5><i class="fa fa-heart" style="color:red"></i>&nbsp;&nbsp;TOP MẶT HÀNG ĐƯỢC YÊU THÍCH</h5>
		<div class="row mt-4">	
			<?php include('./Theme/home/hot.php'); ?>

		</div>
		<a href="?Layout=chuyenmuc" class="d-block text-center my-4"><strong>XEM TẤT CẢ &gt;&gt;</strong></a>
	</div>

	<div id="dssanpham">
		<div class="row">
		<div class="col-12 col-md-2 theloai px-0 d-none d-md-block">
			<strong><h4>Danh mục</h4></strong>
			<?php include('menudoc.php');?>
		</div>
		<div class="col-md-10 col-12 theloai-item">

			<?php include('sanpham.php'); ?>
		</div>
		</div>
	</div>
</div>
