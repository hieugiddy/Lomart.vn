<?php
	if(isset($_GET['loaisp']))
	{
		echo '<div class="row mt-4">';
		$cmd='select chitietsanpham.maSP,tenSP,dongia,hinhanh from chitietsanpham,sanpham where chitietsanpham.maSP=sanpham.maSP and sanpham.maTL='.$_GET['loaisp'].' order by maSP DESC limit 12';
        $hot=$conn->prepare($cmd);
        $hot->execute();
        if($hot->rowCount()>0){
          while($row=$hot->fetch(PDO::FETCH_ASSOC)){
              echo '
                <a href="?Layout=baiviet&id='.$row['maSP'].'" class="link-item" title="'.$row['tenSP'].'">
				<div class="yeuthich_item col-6 col-sm-4 col-md-4 col-lg-3 mb-4 px-2">
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

		echo '</div>';
		echo '<a href="?Layout=chuyenmuc&maTL='.$_GET['loaisp'].'" class="d-block text-center my-4"><strong>XEM TẤT CẢ &gt;&gt;</strong></a>';
	}
	else{
		echo '<div class="row mt-4">';
		$theloai=$conn->prepare('select maTL from theloai limit 1');
		$theloai->execute();
		$tl=$theloai->fetch(PDO::FETCH_ASSOC);
		$cmd='select chitietsanpham.maSP,tenSP,dongia,hinhanh from chitietsanpham,sanpham where chitietsanpham.maSP=sanpham.maSP and sanpham.maTL='.$tl['maTL'].' order by maSP DESC limit 12';
        $hot=$conn->prepare($cmd);
        $hot->execute();
        if($hot->rowCount()>0){
          while($row=$hot->fetch(PDO::FETCH_ASSOC)){
              echo '
                <a href="?Layout=baiviet&id='.$row['maSP'].'" class="link-item" title="'.$row['tenSP'].'">
				<div class="yeuthich_item col-6 col-sm-4 col-md-4 col-lg-3 mb-4 px-2 d-flex">
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

		echo '</div>';
		echo '<a href="?Layout=chuyenmuc&maTL='.$tl['maTL'].'" class="d-block text-center my-4"><strong>XEM TẤT CẢ &gt;&gt;</strong></a>';
	}
		
?>