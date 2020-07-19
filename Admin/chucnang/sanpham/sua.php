<?php
	include('./chucnang/connect.php');
	$thongtinsp=$conn->prepare('select * from sanpham,chitietsanpham where chitietsanpham.maSP=sanpham.maSP and sanpham.maSP='.$_GET['maSP']);
	$thongtinsp->execute();
	$ttsanpham=$thongtinsp->fetch(PDO::FETCH_ASSOC);

	$theloai=$conn->prepare('select * from theloai');
	$theloai->execute();

	$theloaicon=$conn->prepare('select maTLC,tenTLC from chitiettheloai where maTL='.$ttsanpham['maTL']);
	$theloaicon->execute();
?>
<h4><i class="fa fa-edit mr-2 my-3"></i>Chỉnh sửa thông tin sản phẩm</h4>
<form action="chucnang/sanpham/xulysua.php" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-9">
			<input type="hidden" name="maSP" value="<?php echo $ttsanpham['maSP'];?>">
			<label>Tên sản phẩm:</label>
			 <input type="text" value="<?php echo $ttsanpham['tenSP'];?>" name="tensp" size="60" required/>
			 
			 <label class="ml-3 mr-2">Thể loại:</label>
			 <select name="chontl" id="theloai" onchange="load_tlc(this)">
			 	<?php 
			 		while($row=$theloai->fetch(PDO::FETCH_ASSOC)){
		 				if($row['maTL']==$ttsanpham['maTL'])
		 					echo '<option value="'.$row['maTL'].'" selected>'.$row['tenTL'].'</option>';
		 				else
			 				echo '<option value="'.$row['maTL'].'">'.$row['tenTL'].'</option>';
			 		}
			 	?>
			 </select><br>
			 
			 <label>Ảnh sản phẩm:</label>
			 <img src="<?php echo $ttsanpham['hinhanh'];?>" width="60px" height="80px" style="object-fit:cover;margin:20px 0 20px 20px"/>
			 <input type="text" name="linkhinh" value="<?php echo $ttsanpham['hinhanh'];?>" size="60"/><br>
			 <label>Đổi ảnh: </label>
			 <input type="file" name="image" accept="image/jpeg,image/png" style="border:none;" />
			 
			 <br>
			 <label>Số lượng trong kho:</label>
			 <input type="number" value="<?php echo $ttsanpham['soluong'];?>" name="soluong" style="width: 60px" min="1" required/>

			 <br>
			 <label>Giá bán:</label>
			 <input type="text" value="<?php echo $ttsanpham['dongia'];?>" name="giaban" size="20" required/>VNĐ

			 <br><br>
			 <h5>Mô tả sản phẩm:</h5>
			 <textarea name="mota" cols="" rows="" required><?php echo $ttsanpham['moTa'];?></textarea>
				
		</div>
		<div class="col-md-3">
			<h4>Chi tiết thể loại</h4>
			<p id="chitiettheloai">
				<?php
					while ($row=$theloaicon->fetch(PDO::FETCH_ASSOC)) {
						if($row['maTLC']==$ttsanpham['maTLC'])
							echo '<input type="radio" name="maTLC" value="'.$row['maTLC'].'" checked/>'.$row['tenTLC'].'<br>';
						else
							echo '<input type="radio" name="maTLC" value="'.$row['maTLC'].'"/>'.$row['tenTLC'].'<br>';
					}
				?>
			</p>
			<hr>
			<input type="checkbox" name="noibat" value="1" <?php if($ttsanpham['hot']==1) echo 'checked';?>/>Hiển thị ở Sản Phẩm Nổi Bật<br>
			<label>- Độ ưu tiên:</label>
			<input type="number" name="uutien" value="<?php echo $ttsanpham['uutien'];?>" style="width: 55px" min="0" max="100" required/>
			<br><em>(Độ ưu tiên càng cao thì càng được hiển thị lên đầu tiên)</em>
		</div>
	</div>
	<br><br>
	<input type="submit" value="Sửa bài viết" class="btn btn-success" />
	<a href="?menu=sanpham" class="btn btn-danger">Hủy Sửa</a>
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
<script>
        CKEDITOR.replace('mota');
</script>