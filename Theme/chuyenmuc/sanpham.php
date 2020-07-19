<?php

	if(isset($_GET['maTL'])){ /* kiểm tra có đang chọn thể loại thể loại nào ko*/
		if(isset($_GET['maTLC'])){/*kiểm tra có đang chọn thể loại con nào ko- vd chọn thịt lợn trong Thịt & Cá*/
			$sql_theloai='select * from chitiettheloai,theloai where chitiettheloai.maTL=theloai.maTL and chitiettheloai.maTLC="'.$_GET['maTLC'].'"';/*câu truy vấn lấy ra tên thể loại chính và tên thể loại con đang chọn*/
			$sql_sp='select chitietsanpham.maSP,tenSP,hinhanh,dongia from sanpham,chitietsanpham where chitietsanpham.maSP=sanpham.maSP and sanpham.maTLC="'.$_GET['maTLC'].'" order by uutien DESC, maSP DESC';
			/*câu truy vấn lấy ra danh sách sản phẩm thuộc thể loại con đang chọn*/
		}
		else{/*th ko chỉ chọn thể loại chính vd: chỉ chọn Tất cả sản phẩm Thịt & Cá*/
			$sql_theloai='select tenTL from theloai where maTL="'.$_GET['maTL'].'"';/* lấy ra tên thể loại chính đang chọn*/
			$sql_sp='select chitietsanpham.maSP,tenSP,hinhanh,dongia from sanpham,chitietsanpham where chitietsanpham.maSP=sanpham.maSP and sanpham.maTL="'.$_GET['maTL'].'" order by uutien DESC, maSP DESC';/*lấy ra danh sách sản phẩm thuộc thể loại chính đang chọn*/
		}
		/*tiến hành hiển thị tên thể loại chính và thể loại con đang chọn - vd: Thịt & Cá > Thịt lợn*/
		$theloai=$conn->prepare($sql_theloai);
		$theloai->execute();
		$kq_tl=$theloai->fetch(PDO::FETCH_ASSOC);
		if(isset($_GET['maTLC'])){/* th có chọn thể loại con - show ra tên thể loại chính và thể loại con*/
			echo'<h4>';
			echo '<a href="./" style="font-size:28px !important"><i class="fa fa-home mr-2"></i></a>';
			echo $kq_tl['tenTL'].'<i class="fa fa-chevron-right mx-2" style="font-size:17px !important;color:#911"></i>'.$kq_tl['tenTLC'];
			echo '</h4>';
		}
		else{/* th chỉ chọn thể loại chính - show ra tên thể loại chính*/
			echo'<h4>';
			echo '<a href="./" style="font-size:28px !important"><i class="fa fa-home mr-2"></i></a>';
			echo $kq_tl['tenTL'];
			echo '</h4>';
		}
	}
	else{/*th ko có thể loại nào đc chọn - ta hiển thị tất cả sản phẩm*/
		echo '<h4>Tất cả sản phẩm</h4>';
		$sql_sp='select chitietsanpham.maSP,tenSP,hinhanh,dongia from sanpham,chitietsanpham where chitietsanpham.maSP=sanpham.maSP order by uutien DESC, maSP DESC';
	}
	/* tìm tổng số sản phẩm*/
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
					/*nếu tồn tại 1 trang các tham số thì sẽ có link phân trang khác nhau*/
					if(isset($_GET['maTL'])){/* nếu ta đang ở trang sản phẩm của 1 thể loại chính nào đó*/
						if(!isset($_GET['maTLC']))/*thì kiểm tra xem ta có đang ở trang sản phẩm của thể loại con nào ko*/
							echo '<a href="?Layout=chuyenmuc&maTL='.$_GET['maTL'].'&page='.$i.'#dssanpham">'.$i.'</a>'; /*nếu ko có thì link chỉ chứa 1 tham số $_GET['maTL']*/
						else/*nếu có thì link có thêm $_GET['maTLC']*/
							echo '<a href="?Layout=chuyenmuc&maTL='.$_GET['maTL'].'&maTLC='.$_GET['maTLC'].'&page='.$i.'#dssanpham">'.$i.'</a>'; 
					}/*nếu ta ở trang Tất cả sản phẩm*/
					else
						echo '<a href="?Layout=chuyenmuc&page='.$i.'#dssanpham">'.$i.'</a>';
			}						
			echo '</div></center>';
		}
	}
	else
		echo 'Không có sản phẩm nào';
?>


