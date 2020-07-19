<?php
include('../connect.php');
//xóa ở trang chi tiết thể loại
$xoacttl=$conn->prepare('delete from chitiettheloai where maTL='.$_GET['maTL']);
$xoacttl->execute();
//xóa ở trang thể loại
$xoatl=$conn->prepare("delete from theloai where maTL='".$_GET['maTL']."'");
$xoatl->execute();
echo '
<script>
	alert("Xoa thanh cong");
	location.href=\'/Lomart.vn/Admin/?menu=theloai\';
</script>';
?>