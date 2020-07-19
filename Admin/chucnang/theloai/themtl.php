<?php
	include('../connect.php');
	$themtl=$conn->prepare("insert into theloai(tenTL) values('".$_POST['ten']."')");
	if($themtl->execute())
	{
		echo '<script>
		alert("Them thanh cong");
	</script>';
	}
	else
	{
		echo '<script>
		alert("Đã xảy ra lỗi");
	</script>';	
	}
	echo '<script>location.href=\'/Lomart.vn/Admin/?menu=theloai\';</script>';
?>