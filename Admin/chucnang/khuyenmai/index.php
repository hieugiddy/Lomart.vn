<?php include('./chucnang/connect.php');?>
<div id="trang-tl">
<h4><i class="fa fa-list mr-2 my-3"></i>Danh sách khuyến mãi</h4>
<form action="chucnang/theloai/themtl.php" method="post">
	<a class="btn my-3 btn-danger" href="./chucnang/khuyenmai/them.php">(+) Thêm khuyến mãi</a>
</form>
</br>
<div class="row" id="theloaichinh">
	<table class="table table-striped col-7">
	   <thead>
	      <tr>
	         <th>Banner</th>
	         <th>Tên khuyến mãi</th>
	         <th></th>
	      </tr>
	   </thead>
	   <?php
	      $khuyenmai = $conn->prepare("select * from khuyenmai");
	      $khuyenmai->execute();
	      while($row=$khuyenmai->fetch(PDO::FETCH_ASSOC) ){
	      		echo "<tr>";
	      		echo "<td><img src=\"".$row["hinhanh"]."\" width='300px'/></td>";
	      		echo "<td id='".$row["stt"]."'>".$row["tenkm"]."</td>";
	      ?>
	      		<td>
		         	<a href="./chucnang/khuyenmai/sua.php?maKM=<?php echo $row['stt'];?>"class="xoa"><i class="fa fa-edit mr-1"></i>Sửa</button>
		         	<a class="xoa" href="./chucnang/khuyenmai/xoa.php?maKM=<?php echo $row['stt'];?>"><i class="fa fa-trash mr-1"></i>Xóa</a>
	         </td>
	         <?php
	      		echo "</tr>";
	      	}
	       ?>
	</table>
</div>
		<br>
	<center></center>
	</div>
</div>
</div>