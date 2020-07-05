<h4><i class="fa fa-edit mr-2 my-3"></i>Thêm sản phẩm mới</h4>
<form action="chucnang/sanpham/xulythem.php">
	<div class="row">
		<div class="col-md-9">
			<label>Tên sản phẩm:</label>
			 <input type="text" value="" name="tensp" size="60" required/>
			 
			 <label class="ml-3 mr-2">Thể loại:</label>
			 <select name="chon-tl" id="">
			 	<option value="thit">Thịt</option>
			 	<option value="ca">Cá</option>
			 	<option value="trung">Trứng</option>
			 </select><br>
			 
			 <label>Ảnh sản phẩm:</label>
			 <input type="file" name="fileanh" required/>
			 
			 <br>
			 <label>Số lượng trong kho:</label>
			 <input type="text" value="" name="soluong" size="5" required/>

			 <br>
			 <label>Giá bán:</label>
			 <input type="text" value="" name="giaban" size="20" required/>VNĐ

			 <br><br>
			 <h5>Mô tả sản phẩm:</h5>
			 <textarea name="mota" cols="" rows="" required></textarea>
				<script>
				        CKEDITOR.replace( 'mota' );
				</script>

		</div>
		<div class="col-md-3">
			<h4>Chi tiết thể loại</h4>
			<input type="checkbox" name="thitbo" />Thịt bò <br>
			<input type="checkbox" name="thitlon" />Thịt lợn <br>
			<input type="checkbox" name="thitde" />Thịt dê <br>
			<input type="checkbox" name="thitcho" />Thịt chó <br>
			<input type="checkbox" name="thitnai" />Thịt nai <br>
		</div>
	</div>
	<br><br>
	<input type="submit" value="Đăng Sản Phẩm" class="btn bg-dark text-light" />
</form>