<?php
	include('./chucnang/connect.php');
	if(isset($_GET['tim'])){
		$cmd1='select count(maSP) from sanpham where tenSP like "%'.$_GET['tim'].'%"';
		$cmd2='select chitietsanpham.maSP,tenSP,tenTL,uutien,soluong,hot,dongia from chitietsanpham,sanpham,theloai where chitietsanpham.maSP=sanpham.maSP and sanpham.maTL=theloai.maTL and tenSP like "%'.$_GET['tim'].'%" order by chitietsanpham.maSP DESC ';
	}
	else{
		$cmd1='select count(maSP) from sanpham';
		$cmd2='select chitietsanpham.maSP,tenSP,tenTL,uutien,soluong,hot,dongia from chitietsanpham,sanpham,theloai where chitietsanpham.maSP=sanpham.maSP and sanpham.maTL=theloai.maTL order by chitietsanpham.maSP DESC ';
	}
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
	
	$sanpham=$conn->prepare($cmd2.' limit '.$start.','.$limit);/*tiến hành lấy danh sách sản phẩm với số lương đc limit theo số trang*/
	$sanpham->execute();
?>
<h4><i class="fa fa-list mr-2 my-3"></i>Danh sách sản phẩm</h4>
<div id="theloaichinh" class="col-12">
<button class="btn my-3 bg-dark text-light" onclick="themsanpham()">(+) Thêm sản phẩm</button>
<form action="./chucnang/sanpham/tim.php" style="float: right">
	<input type="text" placeholder="Nhập tên sản phẩm cần tìm..." value="<?php if(isset($_GET['tim'])) echo $_GET['tim']; ?>" size="60" name="tim" />
</form>
<table class="table table-striped">
   <thead>
      <tr>
         <th>Tên sản phẩm</th>
         <th>Thể loại</th>
         <th>Độ ưu tiên</th>
         <th>Số lượng</th>
         <th>Nổi bật</th>
         <th>Giá bán</th>
         <th></th>
      </tr>
   </thead>
   <tbody>
   	<?php
   		while ($row=$sanpham->fetch(PDO::FETCH_ASSOC)) {
   			($row['hot']==1)?($noibat='Có'):($noibat='Không');
   			echo '
				<tr>
			      	 <td>'.$row['tenSP'].'</td>
			         <td>'.$row['tenTL'].'</td>
					 <td>'.$row['uutien'].'</td>
					 <td>'.$row['soluong'].'</td>
					 <td>'.$noibat.'</td>
					 <td>'.$row['dongia'].'đ</td>
			         <td>
			         	<button onclick="sua(\''.$row['maSP'].'\')"><i class="fa fa-edit mr-1"></i>Sửa</button>
			         	<button onclick="xoa(\''.$row['maSP'].'\')"><i class="fa fa-trash mr-1"></i>Xóa</button>
			         </td>
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
					echo '<a href="?menu=sanpham&tim='.$_GET['tim'].'&page='.$i.'">'.$i.'</a>'; 
				else
					echo '<a href="?menu=sanpham&page='.$i.'">'.$i.'</a>'; 
		}						
		echo '</div></center>';
	}
?>

<script>
	function themsanpham(){
		location.href='?menu=sanpham&them';
	}
	function xoa(id){
		location.href='/Lomart.vn/Admin/chucnang/sanpham/xoa.php?maSP='+id;	
	}
	function sua(id){
		location.href='?menu=sanpham&sua&maSP='+id;
	}
</script>