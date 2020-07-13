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
         <form action="/Lomart.vn/Theme/giohang/xoasanpham.php" method="post">
         <?php 
            if(isset($_SESSION['sanpham_gh']))
               for($i=0;$i<count($_SESSION['sanpham_gh']);++$i){
                  if($_SESSION['sanpham_gh'][$i]!=""){
                     $cmd='select chitietsanpham.maSP,tenSP,soluong,dongia from sanpham,chitietsanpham where chitietsanpham.maSP=sanpham.maSP and sanpham.maSP="'.$_SESSION['sanpham_gh'][$i].'"';
                     $ctgh=$conn->prepare($cmd);
                     $ctgh->execute();
                     $ctgh_rs=$ctgh->fetch(PDO::FETCH_ASSOC);
                     $max=$ctgh_rs['soluong'];
                     ($max==0)?($min=0):($min=1);
                     echo '
                         <tr class="sanpham">
                              <td><input type="checkbox" name="'.$ctgh_rs['maSP'].'" value="xoa" class="name[]"/></td>
                              <td>'.$ctgh_rs['tenSP'].'</td>
                              <td class="text-center"><input type="number" value="'.$_SESSION['soluong'][$i].'" min="'.$min.'" max="'.$max.'" name="soluong" style="width: 50px;" step="1" onchange="tinhtien(this)" id="'.$ctgh_rs['maSP'].'"/></td>
                              <td><span class="tien-dg">'.$ctgh_rs['dongia'].'</span>đ</td>
                              <td><span class="tien-tt"></span>đ</td>
                        </tr>
                     ';
                  }
               }
            else
               echo '<p>Chưa có sản phẩm nào trong giỏ hàng</p>'
         ?>
        
      </tbody>
   </table>
<button id="xoa" type="submit" style="padding: 6px 8px; background:orange;border-radius: 5px;color: #fff;border: none; box-shadow: 1px 1px 1px #ddd;cursor: pointer;float:left">Xóa khỏi giỏ hàng</button>
</form>
   
</div>