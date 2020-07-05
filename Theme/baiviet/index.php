
<div id="chuyenmuc" class="col-12 col-sm-11 col-xl-9 mx-auto mt-5">
	<div id="dssanpham">
	<div class="row">

	<?php 
		if(!isset($_GET['thanhtoan'])){
			echo '
	
	<div class="col-12 col-md-2 theloai px-0 d-none d-md-block">
		<strong><h4>Danh mục</h4></strong>
		<div class="mt-2">
			<a href="?Layout=chuyenmuc#dssanpham">Tất cả sản phẩm</a>
			<button class="dropdown-btn">001
		    <i class="fa fa-caret-down"></i>
		  </button>
		  <div class="dropdown-container">
		    <a href="?Layout=chuyenmuc&idc=a001_all&id=a001#dssanpham">Tất cả</a>
		  </div>
		  <button class="dropdown-btn">002
		    <i class="fa fa-caret-down"></i>
		  </button>
		  <div class="dropdown-container">
		    <a href="?Layout=chuyenmuc&idc=a002_all&id=a002#dssanpham">Tất cả</a>
		  </div>
			<button class="dropdown-btn">003
		    <i class="fa fa-caret-down"></i>
		  </button>
		  <div class="dropdown-container">
		    <a href="?Layout=chuyenmuc&idc=a003_all&id=a003#dssanpham">Tất cả</a>
		  </div>
		</div>
	</div>
	<div class="col-md-7 col-12 px-5 theloai-item">
		<div id="start-ctsp" class="row">
			<img src="https://tea-3.lozi.vn/v1/ship/resized/sieu-thi-big-c-mien-dong-to-hien-thanh-quan-10-ho-chi-minh-1527673128954004931-593882-1528775071?w=128" alt="" class="col-3"/>
			<div class="col-9">
				<p><strong>Tên sản phẩm</strong></p>
			<p id="giatien">200.000đ</p>
			<form action="./Theme/giohang/themsanpham.php" class="mt-3">
				<input type="hiden" name="id" value="'.$_GET['id'].'"/>
				<input type="text" name="soluong" value="1" style="padding: 5px;width: 40px;text-align:center;margin-right: 10px" />
				<input type="submit" value="Thêm vào giỏ hàng" style="padding: 6px 10px; border:0;color: #fff;background: #900;cursor: pointer;" />
			</form>
			</div>
		</div>		
		<h4 class="mt-5 mb-3" style="margin-left: -10px">Mô tả sản phẩm</h4>
		<div id="gt-ctsp" class="row text-justify">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quia dignissimos placeat asperiores similique libero explicabo laudantium, ipsum, nihil repellendus error. Repellat iste magnam rerum atque consectetur quidem, sequi aperiam.
		</div>
		
	
	</div>
	<div class="col-md-3 col-12 px-3">';
		include('./Theme/giohang/xuatgiohang.php'); 
		echo ' <br>
		<iframe src="https://www6.cbox.ws/box/?boxid=845270&boxtag=yLtqS7" width="100%" height="350" allowtransparency="yes" allow="autoplay" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto" ></iframe> 
	</div>';
	}
	else{
		echo '<div class="col-12 px-3">';
		include('./Theme/giohang/thanhtoan.php');
		echo '</div>';
	}
	?>
	</div>

	<h4 class="mt-5 mb-3">Sản phẩm cùng loại</h4>
	<div class="row">
		<a href="" class="link-item" title="Sản phẩm 1">
		<div class="yeuthich_item col-6 col-sm-4 col-md-3 col-lg-2 mb-4 px-2">
			<div><img src="https://tea-3.lozi.vn/v1/ship/resized/sieu-thi-big-c-mien-dong-to-hien-thanh-quan-10-ho-chi-minh-1527673128954004931-593882-1527905538?w=128" alt="" width="100%"/>
			<p>Bánh Chocopie Orion 198g</p>
			<strong>37.000 đ</strong>
			<a href="" class="them-sp">+Thêm</a></div>
		</div>
		</a>
		<a href="" class="link-item" title="Sản phẩm 1">
		<div class="yeuthich_item col-6 col-sm-4 col-md-3 col-lg-2 mb-4 px-2">
			<div><img src="https://tea-3.lozi.vn/v1/ship/resized/sieu-thi-big-c-mien-dong-to-hien-thanh-quan-10-ho-chi-minh-1527673128954004931-593882-1527905538?w=128" alt="" width="100%"/>
			<p>Bánh Chocopie Orion 198g</p>
			<strong>37.000 đ</strong>
			<a href="" class="them-sp">+Thêm</a></div>
		</div>
		</a>
		<a href="" class="link-item" title="Sản phẩm 1">
		<div class="yeuthich_item col-6 col-sm-4 col-md-3 col-lg-2 mb-4 px-2">
			<div><img src="https://tea-3.lozi.vn/v1/ship/resized/sieu-thi-big-c-mien-dong-to-hien-thanh-quan-10-ho-chi-minh-1527673128954004931-593882-1527905538?w=128" alt="" width="100%"/>
			<p>Bánh Chocopie Orion 198g</p>
			<strong>37.000 đ</strong>
			<a href="" class="them-sp">+Thêm</a></div>
		</div>
		</a>
		<a href="" class="link-item" title="Sản phẩm 1">
		<div class="yeuthich_item col-6 col-sm-4 col-md-3 col-lg-2 mb-4 px-2">
			<div><img src="https://tea-3.lozi.vn/v1/ship/resized/sieu-thi-big-c-mien-dong-to-hien-thanh-quan-10-ho-chi-minh-1527673128954004931-593882-1527905538?w=128" alt="" width="100%"/>
			<p>Bánh Chocopie Orion 198g</p>
			<strong>37.000 đ</strong>
			<a href="" class="them-sp">+Thêm</a></div>
		</div>
		</a>
		<a href="" class="link-item" title="Sản phẩm 1">
		<div class="yeuthich_item col-6 col-sm-4 col-md-3 col-lg-2 mb-4 px-2">
			<div><img src="https://tea-3.lozi.vn/v1/ship/resized/sieu-thi-big-c-mien-dong-to-hien-thanh-quan-10-ho-chi-minh-1527673128954004931-593882-1527905538?w=128" alt="" width="100%"/>
			<p>Bánh Chocopie Orion 198g</p>
			<strong>37.000 đ</strong>
			<a href="" class="them-sp">+Thêm</a></div>
		</div>
		</a>
		<a href="" class="link-item" title="Sản phẩm 1">
		<div class="yeuthich_item col-6 col-sm-4 col-md-3 col-lg-2 mb-4 px-2">
			<div><img src="https://tea-3.lozi.vn/v1/ship/resized/sieu-thi-big-c-mien-dong-to-hien-thanh-quan-10-ho-chi-minh-1527673128954004931-593882-1527905538?w=128" alt="" width="100%"/>
			<p>Bánh Chocopie Orion 198g</p>
			<strong>37.000 đ</strong>
			<a href="" class="them-sp">+Thêm</a></div>
		</div>
		</a>
	</div>


</div></div>