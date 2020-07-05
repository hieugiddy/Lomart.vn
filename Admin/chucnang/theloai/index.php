<div id="trang-tl">
<h4><i class="fa fa-list mr-2 my-3"></i>Danh sách thể loại</h4>
<div class="row">
	<div id="theloaichinh" class="col-12 col-xl-9">
		<strong>Thể loại chính:</strong>
		<input type="text" size="20" value="" />
		<button class="btn my-3 bg-dark text-light">+Thêm thể loại</button>
		<table class="table table-striped">
		   <thead>
		      <tr>
		         <th>ID</th>
		         <th>Tên thể loại</th>
		         <th>Hành động</th>
		      </tr>
		   </thead>
		   <tbody>
		      <tr>
		         <td>01</td>
		         <td id="001">Thịt & Cá</td>
		         <td>
		         	<button onclick="sua('001')"><i class="fa fa-edit mr-1"></i>Sửa</button>
		         	<button><i class="fa fa-trash mr-1"></i>Xóa</button>
		         	<button data-toggle="modal" data-target="#myModal" onclick="theloaicon('001')"><i class="fa fa-eye mr-1"></i>Thể loại con</button>
		         </td>
		      </tr>
		      <tr>
		         <td>02</td>
		         <td id="002">Trứng</td>
		         <td>
		         	<button onclick="sua('002')"><i class="fa fa-edit mr-1"></i>Sửa</button>
		         	<button><i class="fa fa-trash mr-1"></i>Xóa</button>
		         	<button data-toggle="modal" data-target="#myModal" onclick="theloaicon('002')"><i class="fa fa-eye mr-1"></i>Thể loại con</button>
		         </td>
		      </tr>
		      <tr>
		         <td>3</td>
		         <td id="003">C++</td>
		         <td>
		         	<button onclick="sua('003')"><i class="fa fa-edit mr-1"></i>Sửa</button>
		         	<button><i class="fa fa-trash mr-1"></i>Xóa</button>
		         	<button data-toggle="modal" data-target="#myModal" onclick="theloaicon('003')"><i class="fa fa-eye mr-1"></i>Thể loại con</button>
		         </td>
		      </tr>
		   </tbody>
		</table>
		<br>
	<center>Phân trang</center>
	</div>
</div>

<script>
	function sua(id){
		var tenloai=document.getElementById(id);
		var temp=tenloai.innerText;
		tenloai.innerHTML="<input type='text' value='"+temp+"'/><a href=''>Lưu</a>";
	}
	function theloaicon(id){
		var tieude=document.getElementsByClassName('modal-title');
		var ds=document.getElementById('danhsach-tlc');
		var tenloai=document.getElementById(id);
		tieude[0].innerText=tenloai.innerText;
		ds.src="./chucnang/theloai/xemtlc.php?id="+id;
	}

</script>
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
          <iframe src="" frameborder="0" id="danhsach-tlc" width="100%" height="300px"></iframe>
       </div>
       <!-- Modal footer -->
       <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
       </div>
    </div>
 </div>
</div>