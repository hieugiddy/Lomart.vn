<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chi tiết đơn hàng</title>
	<style>
		#wrapper{
			width: 800px;
			margin: auto;
		}
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<div id="wrapper">
		<br><h4>*Sản phẩm được đặt hàng:</h4> <br>
		<table class="table table-striped">
		   <thead>
		      <tr>
		  		 <th>Tên sản phẩm</th>
		         <th>Số lượng</th>
		         <th>Thành tiền</th>
		      </tr>
		   </thead>
		   <tbody>
		   	<?php
		   		include('../connect.php');
		   		$chitietdonhang=$conn->prepare('select tenSP,thanhtien,soluong from sanpham,chitietdonhang where chitietdonhang.maSP=sanpham.maSP and maDH="'.$_GET['maDH'].'"');
		   		$chitietdonhang->execute();
		   		while ($row=$chitietdonhang->fetch(PDO::FETCH_ASSOC)) {
		   			echo '
						<tr>
					      	 <td>'.$row['tenSP'].'</td>
							 <td>'.$row['soluong'].'</td>
							 <td>'.$row['thanhtien'].'đ</td>
					      </tr>
		   			';
		   		}
		   	?>
		      
		   </tbody>
		</table>
		<?php
			$tongtien=$conn->prepare('select sum(thanhtien) from chitietdonhang where maDH="'.$_GET['maDH'].'" group by maDH');
			$tongtien->execute();
			echo '<br/><p>*Tổng tiền là:  '.$tongtien->fetchcolumn().'đ</p>';
		?>
		<br><br><br>
		<h4>*Thông tin đặt hàng:</h4> <br>
		<?php
		   		$donhang=$conn->prepare('select * from donhang where maDH="'.$_GET['maDH'].'"');
		   		$donhang->execute();
		   		while ($row=$donhang->fetch(PDO::FETCH_ASSOC)) {
		   			echo '
						<p><strong>Họ và tên: </strong>'.$row['hoten'].'</p>
					    <p><strong>Địa chỉ Email: </strong>'.$row['email'].'</p>
					    <p><strong>Chi nhánh: </strong>'.$row['chinhanh'].'</p>
					    <p><strong>Địa chỉ nhận hàng: </strong>'.$row['DiaChiNhanHang'].'</p>
					    <p><strong>Số điện thoại: </strong>'.$row['SoDT'].'</p>
					    <p><strong>Ngày đặt: </strong>'.$row['ngaydat'].'</p>
		   			';
		   		}
		   		$conn=null;
		   ?>
		<a href="/Lomart.vn/Admin/?menu=donhang" class="text-center d-block">Về trang trước</a><br>
		<br>
		<br>
		<br>
	</div>
</body>
</html>