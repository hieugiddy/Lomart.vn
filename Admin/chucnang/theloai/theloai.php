<?php include('./chucnang/connect.php');?>
<div id="trang-tl">
<h4><i class="fa fa-list mr-2 my-3"></i>Danh sách thể loại</h4>
<form action="chucnang/theloai/themtl.php" method="post">
	<label>Tên thể loại:</label>
	<input type="text" name="ten" size="20" placeholder="Thêm thể loại mới..." required/>
	<input type="submit" name="themvao" class="btn my-3 bg-dark text-light" value="Thêm thể loại mới"/>
</form>
</br>
<div class="row" id="theloaichinh">
	<table class="table table-striped col-8">
	   <thead>
	      <tr>
	         <th>ID</th>
	         <th>Tên thể loại</th>
	         <th>Hành động</th>
	      </tr>
	   </thead>
	   <?php
	      $dstl = $conn->prepare("select * from theloai");
	      $dstl->execute();
	      while($row=$dstl->fetch(PDO::FETCH_ASSOC) ){
	      		echo "<tr>";
	      		echo "<td>".$row["maTL"]."</td>";
	      		echo "<td id='".$row["maTL"]."'>".$row["tenTL"]."</td>";
	      ?>
	      		<td>
		         	<button onclick="sua('<?php echo $row['maTL'];?>')"><i class="fa fa-edit mr-1"></i>Sửa</button>
		         	<button><a class="xoa" href="chucnang/theloai/xoatl.php?maTL=<?php echo $row['maTL'];?>"onclick="return confirm('Ban co chac chan khong?');"><i class="fa fa-trash mr-1"></i>Xóa</a></button>
					<button  data-toggle="modal" data-target="#myModal" onclick="theloaicon('<?php echo $row['maTL'];?>')">
		         		Thể loại con
		         	</button>
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
<div class="modal" id="myModal">
 <div class="modal-dialog">
    <div class="modal-content" style="width: 800px;margin: auto;max-width: 100%">
       <!-- Modal Header -->
       <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       <!-- Modal body -->
       <div class="modal-body">
       	<form action="chucnang/theloai/themtlc.php" method="get	">
       		<input type="hidden" name="idTL" id="idTL" value="">
			Tên thể loại con: <input type="text" name="tencon" size="20" placeholder="Thêm thể loại con..." required/>
			<button class="btn btn-primary" type="submit">Thêm</button>
		</form>
	</br>
		<iframe src="" frameborder="0" id="danhsach-tlc" width="100%" height="300px"></iframe>
       </div>
       <!-- Modal footer -->
       <div class="modal-footer">
          <button type="button" class="btn btn-success" id="reset" name="" onclick="reset(this)">Làm mới</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
       </div>
    </div>
 </div>
</div>
<script>
	function sua(id){
		var tenloai=document.getElementById(id);
		var temp=tenloai.innerText;
		tenloai.innerHTML="<form action='chucnang/theloai/suatl.php' method='get'><input type='hidden' name='idTL' value='"+id+"'/> <input type='text' name='tenTL' value='"+temp+"'/><input type='submit' class='btn btn-success' value='Lưu'></form>";
	}
	function theloaicon(id){
		var tieude=document.getElementsByClassName('modal-title');
		var ds=document.getElementById('danhsach-tlc');
		var tenloai=document.getElementById(id);
		var idTL=document.getElementById('idTL');
		var lammoi=document.getElementById('reset');
		tieude[0].innerText=tenloai.innerText;
		idTL.value=id;
		lammoi.name=id;
		ds.src="./chucnang/theloai/xemtlc.php?id="+id;
	}
	function reset(obj){
		var id=obj.name;
		var ds=document.getElementById('danhsach-tlc');
		ds.src="./chucnang/theloai/xemtlc.php?id="+id;
	}

</script>