<?php
	include('../connect.php');
	$suatl =$conn->prepare("update chitiettheloai set tenTLC='".$_GET['tenTLC']."' where maTLC='".$_GET['idTLC']."'");
	if($suatl->execute())
		echo '<script>
			alert("Sửa thành công");
				</script>';
	else
		echo '<script>
			alert("Đã có lỗi xảy ra");
				</script>';
	echo '<script>
	history.back();
</script>';
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