<?php
	include('../connect.php');
	$suatl =$conn->prepare("update theloai set tenTL='".$_GET['tenTL']."' where maTL='".$_GET['idTL']."'");
	if($suatl->execute())
		echo '<script>
			alert("Sửa thành công");
				</script>';
	else
		echo '<script>
			alert("Đã có lỗi xảy ra");
				</script>';
	echo '<script>location.href=\'/Lomart.vn/Admin/?menu=theloai\';</script>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>