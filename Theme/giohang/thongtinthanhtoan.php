<div id="giohang">
	<h4>Thông tin đơn hàng</h4><hr>
  <strong style="text-align: left;display: block;">Phí Ship:<input style="width:120px;border: none;background: #fff;color: #900;font-weight: 700" type="text" id="vanchuyen" value="" name="vanchuyen" readonly/>đ</strong>

	<strong style="text-align: left;display: block;">Tiền hàng:<input style="width:120px;border: none;background: #fff;color: #900;font-weight: 700" type="text" id="tienhang" value="" name="tienhang" readonly/>đ</strong>

  <form action="Theme/giohang/xulythanhtoan.php" name="tt_thanhtoan">

			<strong>Họ và tên:&nbsp;</strong><input type="text" placeholder="Họ và tên..." name="hoten" required/><br>

			<strong>Email:&nbsp;</strong><input type="email" placeholder="Email..." name="mail" required/><br>

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
      

			<input type="submit" id="thanhtoan1" value="Thanh toán"/>
	</form>
</div>