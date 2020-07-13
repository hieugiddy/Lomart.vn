<?php
    $hot=$conn->prepare('select chitietsanpham.maSP,tenSP,dongia,hinhanh from chitietsanpham,sanpham where chitietsanpham.maSP=sanpham.maSP and hot=1 order by maSP DESC limit 6 ');
    $hot->execute();
    if($hot->rowCount()>0){
      while($row=$hot->fetch(PDO::FETCH_ASSOC)){
          echo '
            <a href="?Layout=baiviet&id='.$row['maSP'].'" class="link-item" title="'.$row['tenSP'].'">
	<div class="yeuthich_item col-6 col-sm-4 col-md-3 col-lg-2 mb-4 px-2">
		<div><img src="'.$row['hinhanh'].'" alt="" width="100%" class="hot_img"/>
		<p>'.$row['tenSP'].'</p>
		<strong>'.$row['dongia'].' đ</strong>
		<a href="./Theme/giohang/themsanpham.php?id='.$row['maSP'].'&soluong=1" class="them-sp">+Thêm</a></div>
	</div>
	</a>
        ';
      }
    }
    else 
      echo 'Không có sản phẩm nào';
  ?>			
