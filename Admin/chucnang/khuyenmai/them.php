<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm khuyến mãi mới</title>
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
		<form action="/Lomart.vn/Admin/chucnang/khuyenmai/xulythem.php" method="post" enctype="multipart/form-data">
			<br><strong>Thêm khuyến mãi mới</strong><br><br>
			<label>Tên KM:</label>
			<input type="text" name="tenkm" value="" required/><br><br>
			<label>Hình ảnh:</label>
			<input type="file" name="image" accept="image/jpeg,image/png" style="border:none;" /><br><br>
			<label>Nội dung:</label>
			<textarea name="mota" cols="" rows="" required></textarea><br><br>
			<a href="/Lomart.vn/Admin/?menu=khuyenmai" class="btn btn-danger">&lt;&lt;&nbsp;Về trang trước</a>
			<input type="submit" value="(+) Thêm" class="btn btn-success" />
		</form>
	</div>
</body>
<script>
        CKEDITOR.replace('mota');
</script>
</html>