<?php
include('../connect.php');
$xoatlc=$conn->prepare("delete from chitiettheloai where maTLC=".$_GET['maTLC']);
$xoatlc->execute();
echo '
<script>
	alert("Xoa thanh cong");
	history.back();
</script>';
?>