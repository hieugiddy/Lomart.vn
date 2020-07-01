<div class="banner">
	<div id="lammo" class="col-12">
		<div id="banner-content">
			<h3 class="text-center col-12 col-md-7 col-lg-5 mx-auto" style="font-family:Barlow">LOMART.VN - MUA RAU THỊT CÁ VÀ MANG ĐẾN TẬN NƠI CHO BẠN TẠI ĐÀ NẴNG</h3>
			<div class="search-box col-12 col-md-8 col-lg-6 mx-auto mt-5">
				<a class="btn btn-search btn-link" href="" id="timkiem"><i class="fa fa-search"></i></a>
				<form action="Theme/timkiem/xuly_tk.php">
					<input type="text" class="search-box-input" placeholder="Tìm siêu thị, cửa hàng tiện lợi để đặt Lomart giao ngay" value="" id="ip-timkiem" onkeyup="get_tk()" name="q" />
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	function get_tk(){
		var tukhoa=document.getElementById('ip-timkiem');
		var thuchien=document.getElementById('timkiem');
		thuchien.href="?Layout=timkiem&q="+tukhoa.value;
	}
</script>