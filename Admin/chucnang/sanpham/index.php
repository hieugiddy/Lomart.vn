<?php
	if(isset($_GET['them']))
		include('chucnang/sanpham/them.php');
	else
		if(isset($_GET['sua']))
			include('chucnang/sanpham/sua.php');
		else
			if(isset($_GET['xoa']))
				include('chucnang/sanpham/xoa.php');
			else
				include('chucnang/sanpham/sanpham.php');
?>