
<div id="chuyenmuc" class="col-12 col-sm-11 col-xl-9 mx-auto mt-5">
	<div id="dssanpham">
	<div class="row">

	<div class="btn-group d-block d-md-none ml-3">
	   <button class="btn btn-primary dropdown-toggle"
	      type="button"
	      id="dropdownMenuButton" data-toggle="dropdown">
	   Tất cả sản phẩm
	   </button>
	   <div class="dropdown-menu">
	      <a class="dropdown-item" href="#">Javascript</a>
	      <a class="dropdown-item" href="#">Css</a>
	      <div class="dropdown-divider"></div>
	      <a class="dropdown-item" href="#">Bootstrap</a>
	   </div>
	</div>

	<div class="col-12 col-md-2 theloai px-0 d-none d-md-block">
		<strong><h4>Danh mục</h4></strong>
		<?php
			if(isset($_GET['id']))
				echo '<style>#'.$_GET['id'].'{color:#fff !important;background:#000 !important;border:0 !important} #'.$_GET['idc'].'{color:#900 !important;font-weight:700}</style>';
			else
				echo '<style>#a000{color:#fff;background:#000;border:0 !important}</style>';
		?>
		<div class="mt-2">
			<a href="?Layout=chuyenmuc#dssanpham" id="a000">Tất cả sản phẩm</a>
			<button class="dropdown-btn" id="a001">001
		    <i class="fa fa-caret-down"></i>
		  </button>
		  <div class="dropdown-container">
		    <a href="?Layout=chuyenmuc&idc=a001_all&id=a001#dssanpham" id="a001_all">Tất cả</a>
		  </div>
		  <button class="dropdown-btn" id="a002">002
		    <i class="fa fa-caret-down"></i>
		  </button>
		  <div class="dropdown-container">
		    <a href="?Layout=chuyenmuc&idc=a002_all&id=a002#dssanpham" id="a002_all">Tất cả</a>
		  </div>
			<button class="dropdown-btn" id="a003">003
		    <i class="fa fa-caret-down"></i>
		  </button>
		  <div class="dropdown-container">
		    <a href="?Layout=chuyenmuc&idc=a003_all&id=a003#dssanpham" id="a003_all">Tất cả</a>
		  </div>
		</div>
	</div>
	<div class="col-md-10 col-12 theloai-item">

		<?php
		if(isset($_GET['id']))
		{
			echo'<h4>'.$_GET['id'].'/'.$_GET['idc'].'</h4>';
		}
		else{
			echo '
				<h4>Tất cả sản phẩm</h4>
				<div class="row mt-4">
				<a href="" class="link-item" title="Sản phẩm 1">
				<div class="yeuthich_item col-6 col-sm-6 col-md-4 col-lg-3 mb-4 px-2">
					<div><img src="https://tea-3.lozi.vn/v1/ship/resized/sieu-thi-big-c-mien-dong-to-hien-thanh-quan-10-ho-chi-minh-1527673128954004931-593882-1527905538?w=128" alt="" width="100%"/>
					<p>Bánh Chocopie Orion 198g</p>
					<strong>37.000 đ</strong>
					<a href="" class="them-sp">+Thêm</a></div>
				</div>
				</a>
				<a href="" class="link-item" title="Sản phẩm 1">
				<div class="yeuthich_item col-6 col-sm-6 col-md-4 col-lg-3 mb-4 px-2">
					<div><img src="https://tea-3.lozi.vn/v1/ship/resized/sieu-thi-big-c-mien-dong-to-hien-thanh-quan-10-ho-chi-minh-1527673128954004931-593882-1527905538?w=128" alt="" width="100%"/>
					<p>Bánh Chocopie Orion 198g</p>
					<strong>37.000 đ</strong>
					<a href="" class="them-sp">+Thêm</a></div>
				</div>
				</a>
				<a href="" class="link-item" title="Sản phẩm 1">
				<div class="yeuthich_item col-6 col-sm-6 col-md-4 col-lg-3 mb-4 px-2">
					<div><img src="https://tea-3.lozi.vn/v1/ship/resized/sieu-thi-big-c-mien-dong-to-hien-thanh-quan-10-ho-chi-minh-1527673128954004931-593882-1527905538?w=128" alt="" width="100%"/>
					<p>Bánh Chocopie Orion 198g</p>
					<strong>37.000 đ</strong>
					<a href="" class="them-sp">+Thêm</a></div>
				</div>
				</a>
				<a href="" class="link-item" title="Sản phẩm 1">
				<div class="yeuthich_item col-6 col-sm-6 col-md-4 col-lg-3 mb-4 px-2">
					<div><img src="https://tea-3.lozi.vn/v1/ship/resized/sieu-thi-big-c-mien-dong-to-hien-thanh-quan-10-ho-chi-minh-1527673128954004931-593882-1527905538?w=128" alt="" width="100%"/>
					<p>Bánh Chocopie Orion 198g</p>
					<strong>37.000 đ</strong>
					<a href="" class="them-sp">+Thêm</a></div>
				</div>
				</a>
				<a href="" class="link-item" title="Sản phẩm 1">
				<div class="yeuthich_item col-6 col-sm-6 col-md-4 col-lg-3 mb-4 px-2">
					<div><img src="https://tea-3.lozi.vn/v1/ship/resized/sieu-thi-big-c-mien-dong-to-hien-thanh-quan-10-ho-chi-minh-1527673128954004931-593882-1527905538?w=128" alt="" width="100%"/>
					<p>Bánh Chocopie Orion 198g</p>
					<strong>37.000 đ</strong>
					<a href="" class="them-sp">+Thêm</a></div>
				</div>
				</a>
				<a href="" class="link-item" title="Sản phẩm 1">
				<div class="yeuthich_item col-6 col-sm-6 col-md-4 col-lg-3 mb-4 px-2">
					<div><img src="https://tea-3.lozi.vn/v1/ship/resized/sieu-thi-big-c-mien-dong-to-hien-thanh-quan-10-ho-chi-minh-1527673128954004931-593882-1527905538?w=128" alt="" width="100%"/>
					<p>Bánh Chocopie Orion 198g</p>
					<strong>37.000 đ</strong>
					<a href="" class="them-sp">+Thêm</a></div>
				</div>
				</a>
				<a href="" class="link-item" title="Sản phẩm 1">
				<div class="yeuthich_item col-6 col-sm-6 col-md-4 col-lg-3 mb-4 px-2">
					<div><img src="https://tea-3.lozi.vn/v1/ship/resized/sieu-thi-big-c-mien-dong-to-hien-thanh-quan-10-ho-chi-minh-1527673128954004931-593882-1527905538?w=128" alt="" width="100%"/>
					<p>Bánh Chocopie Orion 198g</p>
					<strong>37.000 đ</strong>
					<a href="" class="them-sp">+Thêm</a></div>
				</div>
				</a>
				<a href="" class="link-item" title="Sản phẩm 1">
				<div class="yeuthich_item col-6 col-sm-6 col-md-4 col-lg-3 mb-4 px-2">
					<div><img src="https://tea-3.lozi.vn/v1/ship/resized/sieu-thi-big-c-mien-dong-to-hien-thanh-quan-10-ho-chi-minh-1527673128954004931-593882-1527905538?w=128" alt="" width="100%"/>
					<p>Bánh Chocopie Orion 198g</p>
					<strong>37.000 đ</strong>
					<a href="" class="them-sp">+Thêm</a></div>
				</div>
				</a>
				<a href="" class="link-item" title="Sản phẩm 1">
				<div class="yeuthich_item col-6 col-sm-6 col-md-4 col-lg-3 mb-4 px-2">
					<div><img src="https://tea-3.lozi.vn/v1/ship/resized/sieu-thi-big-c-mien-dong-to-hien-thanh-quan-10-ho-chi-minh-1527673128954004931-593882-1527905538?w=128" alt="" width="100%"/>
					<p>Bánh Chocopie Orion 198g</p>
					<strong>37.000 đ</strong>
					<a href="" class="them-sp">+Thêm</a></div>
				</div>
				</a>
				<a href="" class="link-item" title="Sản phẩm 1">
				<div class="yeuthich_item col-6 col-sm-6 col-md-4 col-lg-3 mb-4 px-2">
					<div><img src="https://tea-3.lozi.vn/v1/ship/resized/sieu-thi-big-c-mien-dong-to-hien-thanh-quan-10-ho-chi-minh-1527673128954004931-593882-1527905538?w=128" alt="" width="100%"/>
					<p>Bánh Chocopie Orion 198g</p>
					<strong>37.000 đ</strong>
					<a href="" class="them-sp">+Thêm</a></div>
				</div>
				</a>
				<a href="" class="link-item" title="Sản phẩm 1">
				<div class="yeuthich_item col-6 col-sm-6 col-md-4 col-lg-3 mb-4 px-2">
					<div><img src="https://tea-3.lozi.vn/v1/ship/resized/sieu-thi-big-c-mien-dong-to-hien-thanh-quan-10-ho-chi-minh-1527673128954004931-593882-1527905538?w=128" alt="" width="100%"/>
					<p>Bánh Chocopie Orion 198g</p>
					<strong>37.000 đ</strong>
					<a href="" class="them-sp">+Thêm</a></div>
				</div>
				</a>
				<a href="" class="link-item" title="Sản phẩm 1">
				<div class="yeuthich_item col-6 col-sm-6 col-md-4 col-lg-3 mb-4 px-2">
					<div><img src="https://tea-3.lozi.vn/v1/ship/resized/sieu-thi-big-c-mien-dong-to-hien-thanh-quan-10-ho-chi-minh-1527673128954004931-593882-1527905538?w=128" alt="" width="100%"/>
					<p>Bánh Chocopie Orion 198g</p>
					<strong>37.000 đ</strong>
					<a href="" class="them-sp">+Thêm</a></div>
				</div>
				</a>

			</div>';
			echo '<center><div class="phantrang mt-5">';
			echo '<span>1</span>
				  <a href="">2</a>
				  <a href="">3</a>
				  <a href="">4</a>
			';
			echo '</div></center>';}
	?>
	</div>
	</div>
</div></div>