<?php
	$sql_sp='select chitietsanpham.maSP,tenSP,hinhanh,dongia from sanpham,chitietsanpham where chitietsanpham.maSP=sanpham.maSP and (sanpham.tenSP like "%'.$_GET['q'].'%" or moTa like "%'.$_GET['q'].'%")order by maSP DESC';
	$sanpham=$conn->prepare($sql_sp);
	$sanpham->execute();
	$tongso_sp=$sanpham->rowCount();
	/*tính số trang*/
	$limit=12;/*số lượng sản phẩm sẽ hiển thị trên 1 trang*/
	$tongsotrang=ceil($tongso_sp/$limit);
	if(isset($_GET['page'])){
		$start=(((int) $_GET['page'])-1)*$limit;/*tính vị trí của sản phẩm đầu tiên sẽ hiển thị trong trang thứ X*/
	}
	else
		$start=0;/*th trang x=1 - trang 1 nên hiển thị từ sản phẩm thứ 0*/
	
	$sanpham=$conn->prepare($sql_sp.' limit '.$start.','.$limit);/*tiến hành lấy danh sách sản phẩm với số lương đc limit theo số trang*/
	$sanpham->execute();

	if($tongso_sp>0){/*nếu có sản phẩm thì mới show ra*/
		echo '<p>Có <strong>'.$tongso_sp.'</strong> kết quả tìm kiếm cho từ khóa <strong>\''.$_GET['q'].'\'</strong></p>';
		echo '
			<div class="row mt-4">
		';
		while($row=$sanpham->fetch(PDO::FETCH_ASSOC)){
			echo '
				<a href="?Layout=baiviet&id='.$row['maSP'].'" class="link-item" title="'.$row['tenSP'].'">
					<div class="yeuthich_item col-6 col-sm-6 col-md-4 col-lg-3 mb-4 px-2">
						<div><img src="'.$row['hinhanh'].'" alt="" width="100%" class="hot_img"/>
						<p>'.$row['tenSP'].'</p>
						<strong>'.$row['dongia'].' đ</strong>
						<a href="./Theme/giohang/themsanpham.php?id='.$row['maSP'].'&soluong=1" class="them-sp">+Thêm</a></div>
					</div>
				</a>
			';
		}
		echo '</div>';
		
		if($tongsotrang!=1){/*nếu có hơn 1 trang thì mới hiển thị phân trang*/
			echo '<center><div class="phantrang mt-5">';
			for($i=1;$i<=$tongsotrang;++$i){
				if(!isset($_GET['page']))
					$tmp=1;/*nếu ko tồn tại tham số $_GET['page'] thì tức ta đang ở trang 1*/
				else
					$tmp=$_GET['page'];/*nếu tồn tại thì gán = số trang ta đang tham chiếu*/

				if($i==$tmp){/*nếu $i = số trang đang tham chiếu đến*/
					echo '<span>'.$tmp.'</span>';/*thì hiển thị số trang theo thẻ span*/
				}
				else/*ngược lại hiển thị số trang theo thẻ a*/
					echo '<a href="?Layout=timkiem&q='.$_GET['q'].'&page='.$i.'#dssanpham">'.$i.'</a>'; 
			}						
			echo '</div></center>';
		}
	}
	else
		echo 'Không có tìm thấy sản phẩm nào cho từ khóa <strong>\''.$_GET['q'].'\'</strong>';
?>
