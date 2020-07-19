<?php
	include('./chucnang/connect.php');
	$thongtin=$conn->prepare('select * from info');
	$thongtin->execute();
	$info=$thongtin->fetch(PDO::FETCH_ASSOC);
?>
<h4><i class="fa fa-edit mr-2 my-3"></i>Chỉnh sửa thông tin Website</h4>
<form action="/Lomart.vn/Admin/chucnang/caidat/thaydoi.php" method="post" enctype="multipart/form-data">
	<label>Tiêu đề Website:</label><br>
	<input type="text" name="tieude" size="60" value="<?php echo $info['tieude'] ?>" required/><br><br>
	<label>Mô tả:</label><br>
	<textarea name="mota" cols="100" rows="5"><?php echo $info['mota'] ?></textarea><br><br>
	<label>Từ khóa:</label><br>
	<textarea name="tukhoa" cols="100" rows="5"><?php echo $info['tukhoa'] ?></textarea><br><br>
	<label>Favicon:</label><br>
	<div class="p-3 d-inline-block" style="border: 1px solid #f1f1f1">
		<img src="<?php echo $info['favicon'];?>" width="80px" style="margin:20px 0 20px 20px"/><br>
		<input type="text" name="favicon_c" value="<?php echo $info['favicon'];?>" size="60"/><br>
		<input type="file" name="favicon" accept="image/png"/>
	</div><br><br>
	<label>Logo:</label><br>
	<div class="p-3 d-inline-block" style="border: 1px solid #f1f1f1">
		<img src="<?php echo $info['logo'];?>" width="80px" style="margin:20px 0 20px 20px"/><br>
		<input type="text" name="logo_c" value="<?php echo $info['logo'];?>" size="60"/><br>
		<input type="file" name="logo" accept="image/png"/>
	</div><br><br>
	<input type="submit" value="Cập nhật" class="btn btn-success d-block my-5" />
</form>