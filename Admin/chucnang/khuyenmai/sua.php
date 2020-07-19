<?php
	include('../connect.php');
	$khuyenmai=$conn->prepare('select * from khuyenmai where stt='.$_GET['maKM']);
	$khuyenmai->execute();
	$ttkhuyenmai=$khuyenmai->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa khuyến mãi</title>
	<style>
		#wrapper{
			width: 800px;
			margin: auto;
		}
	</style>
	<script src="https://cdn.ckeditor.com/4.14.0/standard-all/ckeditor.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<div id="wrapper">
		<form action="/Lomart.vn/Admin/chucnang/khuyenmai/xulysua.php" method="post" enctype="multipart/form-data">
			<br><strong>Sửa khuyến mãi</strong><br><br>
			<input type="hidden" name="maKM" value="<?php echo $ttkhuyenmai['stt'];?>">
			<label>Tên KM:</label>
			<input type="text" name="tenkm" value="<?php echo $ttkhuyenmai['tenkm'];?>" required/><br><br>
			<label>Ảnh hiện tại:</label>
			<img src="<?php echo $ttkhuyenmai['hinhanh'];?>" width="200px" style="margin:20px"/>
			<input type="text" name="linkhinh" value="<?php echo $ttkhuyenmai['hinhanh'];?>" size="60"/><br>
			<label>Thay đổi ảnh:</label>
			<input type="file" name="image" accept="image/jpeg,image/png" style="border:none;margin-left:20px"  /><br><br>
			<label>Nội dung:</label>
			<textarea name="mota" cols="" rows="" required><?php echo $ttkhuyenmai['noidung'];?></textarea><br><br>

			<a href="/Lomart.vn/Admin/?menu=khuyenmai" class="btn btn-danger">&lt;&lt;&nbsp;Về trang trước</a>
			<input type="submit" value="Sửa" class="btn btn-success" /><br><br>
		</form>
	</div>
</body>
<script>
        CKEDITOR.replace('mota');
</script>
</html>
