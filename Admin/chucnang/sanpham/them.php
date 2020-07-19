<?php
	include('./chucnang/connect.php');
	$theloai=$conn->prepare('select * from theloai');
	$theloai->execute();
?>
<h4><i class="fa fa-edit mr-2 my-3"></i>Thêm sản phẩm mới</h4>
<form action="chucnang/sanpham/xulythem.php" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-9">
			<label>Tên sản phẩm:</label>
			 <input type="text" value="" name="tensp" size="60" required/>
			 
			 <label class="ml-3 mr-2">Thể loại:</label>
			 <select name="chontl" id="theloai" onchange="load_tlc(this)">
			 	<option value="">---Chọn thể loại---</option>
			 	<?php 
			 		while($row=$theloai->fetch(PDO::FETCH_ASSOC)){
			 			echo '<option value="'.$row['maTL'].'">'.$row['tenTL'].'</option>';
			 		}
			 	?>
			 </select><br>
			 
			 <label>Ảnh sản phẩm:</label>
			 <input type="file" name="image" accept="image/jpeg,image/png" required/>
			 
			 <br>
			 <label>Số lượng trong kho:</label>
			 <input type="number" value="1" name="soluong" style="width: 60px" min="1" required/>

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
			<p id="chitiettheloai"> </p>
			<hr>
			<input type="checkbox" name="noibat" value="1"/>Hiển thị ở Sản Phẩm Nổi Bật<br>
			<label>- Độ ưu tiên:</label>
			<input type="number" name="uutien" value="0" style="width: 55px" min="0" max="100" required/>
			<br><em>(Độ ưu tiên càng cao thì càng được hiển thị lên đầu tiên)</em>
		</div>
	</div>
	<br><br>
	<input type="submit" value="Đăng Sản Phẩm" class="btn bg-dark text-light" />
</form>


<script>
  function load_tlc(obj){
    var tl=obj.value;
      $.ajax({
          url : "/Lomart.vn/Admin/chucnang/sanpham/gettlc.php",
          type : "get",
          dataType:"text",
          data : {
               maTL : tl
          },
          success : function (result){
              $('#chitiettheloai').html(result);
          }
      });
  }

</script>