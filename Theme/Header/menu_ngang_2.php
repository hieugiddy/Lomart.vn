<?php
if(!isset($_SESSION['chinhanh'])){
	$_SESSION['chinhanh']='75 Cao Thắng, Thanh Bình, Q. Hải Châu, Đà Nẵng, Việt Nam';
	$_SESSION['value']='dn';
}
?>
<nav class="navbar navbar-expand-md bg-light d-flex menungang2">
	<div class="row justify-content-center mx-auto">
			<a href="/Lomart.vn" class="logo mr-5"><img src="https://lomart.vn/dist/images/logo-lomart.png" alt="" width="200px"></a>
			<select name="noio" id="noio" class="mr-4" onchange="doichinhanh(this)">
				<option value="dn" <?php if($_SESSION['value']=="dn") echo 'selected';?> >Đà Nẵng</option>
				<option value="hcm" <?php if($_SESSION['value']=="hcm") echo 'selected';?> >Hồ Chí Minh</option>
				<option value="hn" <?php if($_SESSION['value']=="hn") echo 'selected';?> >Hà Nội</option>
			</select>
			<ul id="menu" class="navbar-nav mr-5 d-block d-md-flex mt-4 mt-md-0 px-1 px-md-0">
				<?php 
					$list_menu=$conn->prepare('select * from theloai');
					$list_menu->execute();
					if($list_menu->rowCount()>0)
						while($row=$list_menu->fetch(PDO::FETCH_ASSOC)){
							echo '<li class="nav-item"><a href="?Layout=chuyenmuc&maTL='.$row['maTL'].'" class="nav-link">'.$row['tenTL'].'</a></li>';
						}
				?>
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
<script>
	function doichinhanh(obj){
		var value=obj.value;
		location.href="./Theme/Header/doichinhanh.php?lc_chinhanh="+value;
	}
</script>