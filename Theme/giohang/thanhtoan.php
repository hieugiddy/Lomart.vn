<?php 
if(!isset($_GET['address2']))
echo '<iframe src="./Theme/giohang/getdiachi.php" frameborder="0" width="100%" height="400px"></iframe>
<br><br><br><br>';
?>
<div id="ctgiohang" class="row">
	<div class="col-8">
		<h4>Chi tiết giỏ hàng:</h4>
         <div class="table-responsive-sm mt-4">
            <table class="table table-bordered table-light table-hover" id="tablex">
               <thead class="thead-dark ">
                  <tr>
                     <th><input type='checkbox' value='' id="ck_all"/></th>
                     <th>Tên sản phẩm</th>
                     <th>Số lượng</th>
                     <th>Đơn giá</th>
                     <th>Thành tiền</th>
                  </tr>
               </thead>
               <tbody id="sanpham_gh">
                  <tr class="sanpham">
                  		<td><input type='checkbox' name='ck_sanpham1' value='' class="name[]"/></td>
	                     <td>Bánh 1</td>
	                     <td class="text-center"><input type="text" value="1" name="soluong" style="width: 35px;padding:0 5px;text-align: center;" onkeyup="tinhtien()"/></td>
	                     <td><span class="tien-dg">70000</span>đ</td>
	                     <td><span class="tien-tt"></span>đ</td>
                  </tr>
                  <tr class="sanpham">
                  		<td><input type='checkbox' name='ck_sanpham2' value='' class="name[]"/></td>
	                     <td>Bánh 2</td>
	                     <td class="text-center"><input type="text" value="1" name="soluong" style="width: 35px;padding:0 5px;text-align: center;" onkeyup="tinhtien()"/></td>
	                     <td><span class="tien-dg">70000</span>đ</td>
	                     <td><span class="tien-tt"></span>đ</td>
                  </tr>
                  <tr class="sanpham">
                  		<td><input type='checkbox' name='ck_sanpham3' value='' class="name[]"/></td>
	                     <td>Bánh 3</td>
	                     <td class="text-center"><input type="text" value="1" name="soluong" style="width: 35px;padding:0 5px;text-align: center;" onkeyup="tinhtien()"/></td>
	                     <td><span class="tien-dg">70000</span>đ</td>
	                     <td><span class="tien-tt"></span>đ</td>
                  </tr>
                  <tr class="sanpham">
                  		<td><input type='checkbox' name='ck_sanpham4' value='' class="name[]"/></td>
	                     <td>Bánh 4</td>
	                     <td class="text-center"><input type="text" value="1" name="soluong" style="width: 35px;padding:0 5px;text-align: center;" onkeyup="tinhtien()"/></td>
	                     <td><span class="tien-dg">70000</span>đ</td>
	                     <td><span class="tien-tt"></span>đ</td>
                  </tr>
               </tbody>
            </table>
			<button id="xoa" onclick="xoa()" style="padding: 6px 8px; background:orange;border-radius: 5px;color: #fff;border: none; box-shadow: 1px 1px 1px #ddd;cursor: pointer;float:left">Xóa khỏi giỏ hàng</button>
            
         </div>
    </div>
    <div class="col-4">
    	<div id="giohang">
			<h4>Thông tin đơn hàng</h4><hr>
      <strong style="text-align: left;display: block;">Phí Ship:<input style="border: none;background: #fff;color: #900;font-weight: 700" type="text" id="vanchuyen" value="" name="vanchuyen" readonly/></strong>

			<strong style="text-align: left;display: block;">Tiền hàng:<input style="border: none;background: #fff;color: #900;font-weight: 700" type="text" id="tienhang" value="" name="tienhang" readonly/></strong>

      <form action="Theme/giohang/xulythanhtoan.php" name="tt_thanhtoan">

    			<strong>Họ và tên:&nbsp;</strong><input type="text" placeholder="Họ và tên..." name="hoten" required/><br>

    			<strong>Email:&nbsp;</strong><input type="email" placeholder="Email..." name="mail"/><br>

          <strong style="text-align: left;display: block;">Giao từ:&nbsp;&nbsp;&nbsp;<input type="text" name="address1" <?php echo 'value="'.$_SESSION['chinhanh'].'"';?> class="address_input" size="40" readonly/></strong>

    			<strong>Đến:&nbsp;</strong><input id="pac-input" class="address_input" type="text" placeholder="Nhập địa chỉ nhận hàng..." name="address2" <?php if(!isset($_GET['address2'])) echo 'value=""'; else echo 'value="'.$_GET['address2'].'"';?> readonly/>
          
          &nbsp;&nbsp;<a href="?Layout=baiviet&thanhtoan=1" style="color: blue;text-decoration: underline;">Thay đổi</a>

          <br>
    			<strong>Số điện thoại:&nbsp;</strong><input type="text" placeholder="Số điện thoại..." name="sodt" required/>
          <br><br>
          <strong style="text-align: left;display: block;">Khoảng cách:&nbsp;
          <span id="khoangcach" style="color: #900;font-weight: 700"></span>(Killomét)
          </strong>
          <br><br>
          <p>(Miễn phí ship đơn hàng có khoảng cách không quá 12km, trên 12km chịu <span style="color: #900;font-weight: 700">5%*(Tiền hàng) + 5%*(Khoảng cách)</span> )</p><br>

          <strong style="text-align: left;display: block;">Tổng Tiền:&nbsp;&nbsp;&nbsp;~<input style="border: none;background: #fff;color: #900;font-weight: 700;width:100px" type="text" id="tongtien" value="" name="tongtien" readonly/>VNĐ</strong>
          <br>
          <input name="hinhthuc" type="radio" value="01" class="hinhthuc" checked/>&nbsp;Thanh toán khi nhận hàng <br>
          <input name="hinhthuc" type="radio" value="02" class="hinhthuc"/>&nbsp;Thanh toán bằng Paypal

    			<input type="submit" id="thanhtoan1" value="Thanh toán"/>
			</form>
		</div>
    </div>
</div>


<script>
	var sl = document.getElementsByName("soluong");
	var dg= document.getElementsByClassName("tien-dg");
	var tt= document.getElementsByClassName("tien-tt");
  var tienhang=document.getElementById("tienhang");
	var s=0;
  for (var i = 0; i < sl.length; i++) {
    tt[i].innerHTML=""+sl[i].value*dg[i].innerHTML;
    s+=parseFloat(tt[i].innerHTML);
  }
    
  tienhang.value =s+"đ";

  function tinhtien(){
  	var sl = document.getElementsByName("soluong");
  	var dg= document.getElementsByClassName("tien-dg");
  	var tt= document.getElementsByClassName("tien-tt");
  	var s=0;
    for (var i = 0; i < sl.length; i++) {
      tt[i].innerHTML=""+sl[i].value*dg[i].innerHTML;
      s+=parseFloat(tt[i].innerHTML);
    }
    tienhang.value =s+"đ";
    calculateDistance();
  }

  function xoa(){
  	var bang=document.getElementById('tablex');
  	var tbody=document.getElementById('sanpham_gh');
  	// Lấy danh sách sản phẩm
  	var hang= document.getElementsByClassName("sanpham");
  	// Lấy danh sách checkbox
      var list_ck = document.getElementsByClassName('name[]');
    for (var i = 0; i < hang.length; i++) {
    	if(document.getElementById("ck_all").checked){
			bang.removeChild(tbody);
    	}
    	else{
    	if(list_ck[i].checked){
    		tbody.removeChild(hang[i]);
    		--i;
    	}}
    }
    tinhtien();
  }
</script>