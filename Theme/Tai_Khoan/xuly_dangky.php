<?php
 	include('../connect.php');
 	if($_POST['username']!="" and $_POST['matkhau']!=""){
	 	$ktra=$conn->prepare('select * from taikhoan where username="'.$_POST['username'].'"');
	 	$ktra->execute();
	 	if($ktra->rowCount()!=0)
 			echo '<font color="red">Username đã tồn tại trong hệ thống!</font>';
 		else{
 			$join=$conn->prepare('insert into taikhoan(username,password) value("'.$_POST['username'].'","'.$_POST['matkhau'].'")');
	 		$join->execute();
	 		echo '<font color="green">Đăng ký thành công, xin mời đăng nhập!</font>';
 		}

	}
	else{
		if($_POST['username']=="")
			echo '<font color="red">Vui lòng nhập Username!</font>';
		else
			echo '<font color="red">Vui lòng nhập Password!</font>';
	}
 	$conn=null;
?>
