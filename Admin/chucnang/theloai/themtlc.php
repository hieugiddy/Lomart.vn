<?php
	include('../connect.php');
	$themtlc=$conn->prepare("insert into chitiettheloai(maTL,tenTLC) values('".$_GET["idTL"]."','".$_GET['tencon']."')");
	if($themtlc->execute())
	{
		echo '<script>
		alert("Them thanh cong");
	</script>';
	}
	else
	{
		echo '<script>
		alert("Đã có lỗi xảy ra");
	</script>';
	}
	echo '<script>location.href=\'/Lomart.vn/Admin/?menu=theloai\';</script>'
?>