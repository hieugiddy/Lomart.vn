<?php
	include('./chucnang/connect.php');
	$cmd1='select count(maDH) from donhang';
	$cmd2='select * from donhang order by ngaydat DESC ';
	/* tìm tổng số sản phẩm*/
	$tongso_sp=$conn->prepare($cmd1);
	$tongso_sp->execute();
	$soSP=$tongso_sp->fetchcolumn();
	/*tính số trang*/
	$limit=6;/*số lượng sản phẩm sẽ hiển thị trên 1 trang*/
	$tongsotrang=ceil($soSP/$limit);
	if(isset($_GET['page']))
		$start=(((int) $_GET['page'])-1)*$limit;/*tính vị trí của sản phẩm đầu tiên sẽ hiển thị trong trang thứ X*/
	else
		$start=0;/*th trang x=1 - trang 1 nên hiển thị từ sản phẩm thứ 0*/
	
	$donhang=$conn->prepare($cmd2.' limit '.$start.','.$limit);/*tiến hành lấy danh sách sản phẩm với số lương đc limit theo số trang*/
	$donhang->execute();
?>
<h4><i class="fa fa-list mr-2 my-3"></i>Danh sách đơn hàng</h4>
<div class="col-12">
<table class="table table-striped">
   <thead>
      <tr>
  		 <th>Mã ĐH</th>
         <th>Họ tên</th>
         <th>Email</th>
         <th>Chi nhánh</th>
         <th>Địa chỉ</th>
         <th>Số ĐT</th>
         <th>Ngày đặt</th>
         <th></th>
      </tr>
   </thead>
   <tbody>
   	<?php
   		while ($row=$donhang->fetch(PDO::FETCH_ASSOC)) {
   			echo '
				<tr>
			      	 <td>'.$row['maDH'].'</td>
			         <td>'.$row['hoten'].'</td>
					 <td>'.$row['email'].'</td>
					 <td>'.$row['chinhanh'].'</td>
					 <td>'.$row['DiaChiNhanHang'].'</td>
					 <td>'.$row['SoDT'].'</td>
					 <td>'.$row['ngaydat'].'</td>
					 <td><a href="./chucnang/donhang/xem.php?maDH='.$row['maDH'].'">Xem sản phẩm</a></td>
			      </tr>
   			';
   		}
   	?>
      
   </tbody>
</table>
</div><br>

<?php
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
				if(isset($_GET['tim']))
					echo '<a href="?menu=donhang&tim='.$_GET['tim'].'&page='.$i.'">'.$i.'</a>'; 
				else
					echo '<a href="?menu=donhang&page='.$i.'">'.$i.'</a>'; 
		}						
		echo '</div></center>';
	}
?>
