<nav class="navbar navbar-expand-md bg-light d-flex menungang2">
	<div class="row justify-content-center mx-auto">
			<a href="" class="logo mr-5"><img src="https://lomart.vn/dist/images/logo-lomart.png" alt="" width="200px"></a>
			<select name="noio" id="noio" class="mr-4">
				<option value="dn">Đà Nẵng</option>
				<option value="hcm">Hồ Chí Minh</option>
				<option value="hn">Hà Nội</option>
			</select>
			<ul id="menu" class="navbar-nav mr-5 d-block d-md-flex mt-4 mt-md-0 px-1 px-md-0">
				<li class="nav-item"><a href="?Layout=chuyenmuc&id=a001&idc=a001_all" class="nav-link">Thịt & Cá</a></li>
				<li class="nav-item"><a href="?Layout=chuyenmuc&id=a002&idc=a002_all" class="nav-link">Hải Sản</a></li>
				<li class="nav-item"><a href="?Layout=chuyenmuc&id=a003&idc=a003_all" class="nav-link">Siêu thị</a></li>
				<li class="nav-item"><a href="?Layout=chuyenmuc&id=a004&idc=a004_all" class="nav-link">Siêu thị</a></li>
				<li class="nav-item"><a href="?Layout=chuyenmuc&id=a005&idc=a005_all" class="nav-link">Siêu thị</a></li>
				<li class="nav-item"><a href="?Layout=chuyenmuc&id=a006&idc=a006_all" class="nav-link">Siêu thị</a></li>
				<li class="nav-item"><a href="?Layout=chuyenmuc" class="nav-link">Tất cả</a></li>
			</ul>
			<script>
				if(localStorage.getItem('user')){
					document.write('<div class="btn-group"><button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"><i class="fa fa-user" style="color:#000"></i>&nbsp;&nbsp;'+localStorage.getItem("user")+'</button><div class="dropdown-menu"><a class="dropdown-item" href="#">&nbsp;<i class="fa fa-info"></i>&nbsp;&nbsp;Thông tin tài khoản</a><a class="dropdown-item" href="?Layout=baiviet&thanhtoan=1"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Giỏ hàng</a>');
					if(localStorage.getItem('quyenhan')=="1"){
						document.write('<a class="dropdown-item" href="Admin"><i class="fa fa-tasks"></i>&nbsp;&nbsp;Quản trị Website</a>');
					}
					document.write('<a class="dropdown-item" href="./Theme/Tai_Khoan/dangxuat.php"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Đăng xuất</a></div></div>');
				}
				else
					document.write('<button type="button" class="btn btn-primary mt-4 mt-md-0" data-toggle="modal" data-target="#myModal">Đăng Nhập/Ký</button>');

			</script>
	</div>
</nav>
