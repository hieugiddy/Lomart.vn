<h4><i class="fa fa-list mr-2 my-3"></i>Danh sách sản phẩm</h4>
<div id="theloaichinh" class="col-12">
<button class="btn my-3 bg-dark text-light" onclick="themsanpham()">(+) Thêm sản phẩm</button>
<form action="" style="float: right">
	<input type="text" placeholder="Nhập tên sản phẩm cần tìm..." value="" size="60" />
</form>
<table class="table table-striped">
   <thead>
      <tr>
         <th>Tên sản phẩm</th>
         <th>Thể loại
			<div class="btn-group lockq">
			   <button class="btn btn-light dropdown-toggle"
			    type="button"
			    id="dropdownMenuButton" data-toggle="dropdown">
				 </button>
			 
			   <div class="dropdown-menu">
			       <a class="dropdown-item" href="">Thịt & cá</a>
			       <a class="dropdown-item" href="">Trứng</a>
			       <a class="dropdown-item" href="">Hải sản</a>
			   </div>
			 
			</div>
         </th>
         <th>Độ ưu tiên
			<div class="btn-group lockq">
			   <button class="btn btn-light dropdown-toggle"
			    type="button"
			    id="dropdownMenuButton" data-toggle="dropdown">
				 </button>
			 
			   <div class="dropdown-menu">
			       <a class="dropdown-item" href="">Lớn nhất</a>
			       <a class="dropdown-item" href="">Nhỏ nhất</a>
			   </div>
			 
			</div>
         </th>
         <th>Trạng thái
			<div class="btn-group lockq">
			   <button class="btn btn-light dropdown-toggle"
			    type="button"
			    id="dropdownMenuButton" data-toggle="dropdown">
				 </button>
			 
			   <div class="dropdown-menu">
			       <a class="dropdown-item" href="">Còn hàng</a>
			       <a class="dropdown-item" href="">Hết hàng</a>
			   </div>
			 
			</div>
         </th>
         <th>Nổi bật
			<div class="btn-group lockq">
			   <button class="btn btn-light dropdown-toggle"
			    type="button"
			    id="dropdownMenuButton" data-toggle="dropdown">
				 </button>
			 
			   <div class="dropdown-menu">
			       <a class="dropdown-item" href="">Có</a>
			       <a class="dropdown-item" href="">Không</a>
			   </div>
			 
			</div>
         </th>
         <th>Giá bán
			<div class="btn-group lockq">
			   <button class="btn btn-light dropdown-toggle"
			    type="button"
			    id="dropdownMenuButton" data-toggle="dropdown">
				 </button>
			 
			   <div class="dropdown-menu">
			       <a class="dropdown-item" href="">Thấp đến cao</a>
			       <a class="dropdown-item" href="">Cao đến thấp</a>
			   </div>
			 
			</div>
         </th>
         <th></th>
      </tr>
   </thead>
   <tbody>
      <tr>
      	 <td>Thịt heo rừng</td>
         <td>Thịt & Cá</td>
		 <td>0</td>
		 <td>50/100</td>
		 <td>Có</td>
		 <td>30.000đ</td>
         <td>
         	<button onclick="sua('001')"><i class="fa fa-edit mr-1"></i>Sửa</button>
         	<button onclick="xoa('001')"><i class="fa fa-trash mr-1"></i>Xóa</button>
         </td>
      </tr>
      <tr>
         <td>Thịt heo rừng</td>
         <td>Thịt & Cá</td>
		 <td>0</td>
		 <td>20/100</td>
		 <td>Không</td>
		 <td>120.000đ</td>
         <td>
         	<button onclick="sua('002')"><i class="fa fa-edit mr-1"></i>Sửa</button>
         	<button onclick="xoa('002')"><i class="fa fa-trash mr-1"></i>Xóa</button>
         </td>
      </tr>
      <tr>
         <td>Thịt heo giả cày thơm ngon</td>
         <td>Thịt & Cá</td>
		 <td>0</td>
		 <td>Hết hàng</td>
		 <td>Không</td>
		 <td>41.000đ</td>
         <td>
         	<button onclick="sua('003')"><i class="fa fa-edit mr-1"></i>Sửa</button>
         	<button onclick="xoa('003')"><i class="fa fa-trash mr-1"></i>Xóa</button>
         </td>
      </tr>
   </tbody>
</table>
</div><br>
<center>Phân trang</center>
<script>
	function themsanpham(){
		location.href='?menu=sanpham&them';
	}
	function xoa(id){
		location.href='?menu=sanpham&xoa&id='+id;	
	}
	function sua(id){
		location.href='?menu=sanpham&sua&id='+id;
	}
</script>