<fieldset>
      <legend>Thanh toán qua cổng PayPal</legend>
      <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

            <!-- Nhập địa chỉ email người nhận tiền (người bán) -->
            <input type="hidden" name="business" value="sb-sk0ho2512368@personal.example.com">

            <!-- tham số cmd có giá trị _xclick chỉ rõ cho paypal biết là người dùng nhất nút thanh toán -->
            <input type="hidden" name="cmd" value="_xclick">

            <!-- Thông tin mua hàng. -->
            <input type="hidden" name="item_name" value="Thanh Toan">
                  <!--Loại tiền-->
            <input type="hidden" name="currency_code" value="USD">
                  <!--Đường link mình cung cấp cho Paypal biết để sau khi xử lí thành công nó sẽ chuyển về theo đường link này-->
            <input type="hidden" name="return" value="http://localhost:8080/Lomart.vn/Theme/giohang/thanhcong.php">
                  <!--Đường link mình cung cấp cho Paypal biết để nếu  xử lí KHÔNG thành công nó sẽ chuyển về theo đường link này-->
            <input type="hidden" name="cancel_return" value="http://localhost:8080/Lomart.vn/Theme/giohang/loi.php">

            <strong>Họ và tên:&nbsp;</strong><input type="text" <?php echo 'value="'.$_GET['hoten'].'"';?> readonly/><br>

            <strong>Email:&nbsp;</strong><input type="email" <?php echo 'value="'.$_GET['mail'].'"';?> readonly/><br>

          <strong style="text-align: left;display: block;">Giao từ:&nbsp;&nbsp;&nbsp;<input type="text" <?php echo 'value="'.$_GET['address1'].'"';?> class="address_input" size="40" readonly/></strong>

            <strong>Đến:&nbsp;</strong><input id="pac-input" class="address_input" type="text"<?php echo 'value="'.$_GET['address2'].'"';?> readonly/>

          <br>
            <strong>Số điện thoại:&nbsp;</strong><input type="text" <?php echo 'value="'.$_GET['sodt'].'"';?> required/>
          <br>
            <!--Trị giá của giỏ hàng, vì paypal không hỗ trợ tiền việt nên phải đổi ra tiền $-->
            <strong>Tiền phải thanh toán:</strong> <input type="number" id="tien" name="amount" <?php $kq=((int) $_GET['tongtien'])/20000; echo 'value="'.$kq.'"';?> readonly>&nbsp;&nbsp;(USD)<br>
            <!-- Nút bấm. -->
            <center><input type="submit" name="submit" value="Tiến hành thanh toán" id="thanhtoan"></center>
      </form>
</fieldset>