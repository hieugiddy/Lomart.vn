<script language="javascript">
    	var geocoder, location1, location2;
		function initialize() {
        geocoder = new GClientGeocoder();
        showLocation();
    }

    function showLocation() {
        geocoder.getLocations(document.forms[2].address1.value, function (response) {
            if (!response || response.Status.code != 200)
            {
                
            }
            else
            {
                location1 = {lat: response.Placemark[0].Point.coordinates[1], lon: response.Placemark[0].Point.coordinates[0], address: response.Placemark[0].address};
                geocoder.getLocations(document.forms[2].address2.value, function (response) {
                    if (!response || response.Status.code != 200)
                    {
                        
                    }
                    else
                    {
                        location2 = {lat: response.Placemark[0].Point.coordinates[1], lon: response.Placemark[0].Point.coordinates[0], address: response.Placemark[0].address};
                        calculateDistance();
                    }
                });
            }
        });
    }
    
    function calculateDistance()
    {
        try
        {
            var glatlng1 = new GLatLng(location1.lat, location1.lon);
            var glatlng2 = new GLatLng(location2.lat, location2.lon);
            var miledistance = glatlng1.distanceFrom(glatlng2, 3959).toFixed(1);
            var kmdistance = (miledistance * 1.609344).toFixed(3);
            var tienhang=document.getElementById("tienhang");

            document.getElementById('khoangcach').innerHTML = kmdistance;
            if(kmdistance<=12 || tienhang.value=="0đ"){
            	document.getElementById('vanchuyen').value = "0đ";
            	document.getElementById('tongtien').value = "~ "+parseFloat(tienhang.value)+"đ";
    		}
            else{
            	var tt=0.05*parseFloat(tienhang.value)+0.05*kmdistance;
            	var vc=document.getElementById('vanchuyen');
            	vc.value = tt;
            	document.getElementById('tongtien').value = (parseFloat(tienhang.value)+parseFloat(vc.value)).toFixed(1);
            }
        }
        catch (error)
        {
            alert(error);
        }
    }

    </script>

<!-- check box trong thanh toán -->
<script language="javascript">
	var stt=0;
    // Chức năng chọn hết
    document.getElementById("ck_all").onclick = function () 
    {
        // Lấy danh sách checkbox
        var checkboxes = document.getElementsByClassName('name[]');
      if(stt==0){
        // Lặp và thiết lập checked
        for (var i = 0; i < checkboxes.length; i++){
            checkboxes[i].checked = true;
        }
        stt=1;
      }
      else {
        for (var i = 0; i < checkboxes.length; i++){
            checkboxes[i].checked = false;
        }
        stt=0;
      }
      	
    };
</script>
<!-- menu dropdow-->
<script>
	var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
<footer>
	<br><br>
	<div class="col-12 col-sm-11 col-md-10 col-lg-9 mx-auto tuyendung">
		<h5>TRỞ THÀNH CHIẾN BINH LOMART NGAY HÔM NAY</h5>
		<div class="td_bk">
			<div id="lammo" class="col-12">
				<div class="row">
					<div class="td-noidung col-12 col-lg-10 px-3">
						<h5><strong>TRỞ THÀNH CHIẾN BINH LOMART - NHANH VÀ MIỄN PHÍ</strong></h5>
						<p>Dễ dàng trở thành chiến binh của Lomart</p>
						<p>Lomart - ứng dụng giao thực phẩm trong vòng 1 giờ - với xe máy của chính mình và điện thoại Android hoặc iPhone.</p>
					</div>
					<div class="td-nut col-md-2 mb-3">
						<button type="button" class="btn btn-success mt-4 mt-md-0" data-toggle="modal" data-target="#dk-tuyendung">Đăng ký</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="row">
		<div class="col-12 col-sm-6 mx-auto col-md-7 col-lg-4 gt px-2 px-md-3 px-xl-4 mb-5">
			<h3>Giới thiệu</h3>
			<p>Lomart - Siêu thị thu nhỏ, Đặt mua rau thịt cá trực tuyến mang đến tận nới cho bạn. Không cần ra ngoài mà vẫn có đồ ăn ngon, Lomart giúp bạn tiết kiệm thời gian dành cho những công việc khác.</p>
			<img src="https://static.wapmaker.net/5e0de66efce1810fd09a26c9/logobct_580132795da142c79ffb89b595168de6.png" alt="" width="140px" />

		</div>
		<div class="col-12 col-sm-6 mx-auto col-md-5 col-lg-2 lk mb-5">
			<h3>Liên kết</h3>
			<ul>
				<li><a href="">Tìm kiếm</a></li>
				<li><a href="">Giới thiệu</a></li>
				<li><a href="">Chính sách đổi trả</a></li>
				<li><a href="">Chính sách bảo mật</a></li>
				<li><a href="">Điều khoản dịch vụ</a></li>
			</ul>
		</div>
		<div class="col-12 col-md-6 col-lg-3 col-sm-6 mx-auto mb-5 lh">
			<h3>Thông tin liên hệ</h3>
			<ul>
				<li id="dc"><a href="https://maps.app.goo.gl/tdJG7uaB6xnQMwsL8" target="_blank">Tòa nhà Lữ Gia, Tầng 4 - 70 Lữ Gia - F.15 - Q11 - Tp. Hồ Chí Minh.</a></li>
				<li id="sdt1"><a href="tel:0945555163">094.5555.163</a></li>
				<li id="sdt2"><a href="tel:0905823565">0905.823.565</a></li>
				<li id="mail"><a href="mailto:hotroloship@lozi.vn" target="_blank">hotroloship@lozi.vn</a></li>
			</ul>
		</div>
		<div class="col-12 col-md-6 col-lg-3 col-sm-6 mx-auto mb-3" style="overflow-x: hidden;">
			<h3>Fanpage</h3>
			<iframe name="f3f9fb26dda58c" width="300px" height="250px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v7.0/plugins/page.php?adapt_container_width=true&amp;app_id=476759459479922&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2f06e965efdbf8%26domain%3D%26origin%3Dfile%253A%252F%252F%252Ff3f91c8c42c34e4%26relation%3Dparent.parent&amp;container_width=1584&amp;height=250&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FLoshipVN&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=300" style="border: none; visibility: visible; width: 300px; height: 250px;" class=""></iframe>
		</div>
		</div>
	</div>
	<div id="copyright">
		<p>Copyright © 2020 <strong>Công ty Cổ Phần Lozi Việt Nam</strong>. Design by <a href="https://m.me/"><strong><u>Nhóm H2D</u></strong></a></p>
	</div>


</div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<div class="modal" id="dk-tuyendung"
   data-backdrop="static"
   data-keyboard="true"
   tabindex="-1"
   aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
            <h4 class="modal-title">Đăng ký làm Shiper</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <!-- Modal body -->
         <div class="modal-body">
            Modal body..
         </div>
         <!-- Modal footer -->
         <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>


<div class="modal" id="myModal"
   data-backdrop="static"
   data-keyboard="true"
   tabindex="-1"
   aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
         	<h4 class="modal-title">Tài khoản</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <!-- Modal body -->
         <div class="modal-body">
         	<ul class="nav nav-tabs" id="myTab" role="tablist">
			   <li class="nav-item">
			      <a class="nav-link active" id="tab-javascript" data-toggle="tab"
			         href="#content-dangnhap"
			         role="tab" aria-controls="content-dangnhap" aria-selected="true">
			      Đăng nhập
			      </a>
			   </li>
			   <li class="nav-item">
			      <a class="nav-link" id="tab-css" data-toggle="tab"
			         href="#content-dangky"
			         role="tab" aria-controls="content-dangky" aria-selected="false">
			      Đăng ký
			      </a>
			   </li>
			</ul>
			 
			<div class="tab-content" id="myTabContent">
			   <div class="tab-pane fade show active" id="content-dangnhap"
			      role="tabpanel" aria-labelledby="tab-dangnhap">
			      <?php include('./Theme/Tai_Khoan/dangnhap.php'); ?>
			   </div>
			   <div class="tab-pane fade" id="content-dangky"
			      role="tabpanel" aria-labelledby="tab-dangky">
			      <?php include('./Theme/Tai_Khoan/dangky.php'); ?>
			   </div>
			</div>
         </div>
      </div>
   </div>
</div>