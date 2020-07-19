<?php 
if(!isset($_GET['address2']))
echo '<iframe src="./Theme/giohang/getdiachi.php" frameborder="0" width="100%" height="400px"></iframe>
<br><br><br><br>';
?>
<div id="ctgiohang" class="row">
	<div class="col-8">
		  <?php include('./Theme/giohang/chitietgiohang.php'); ?>
    </div>
    <div class="col-4">
    	<?php include('./Theme/giohang/thongtinthanhtoan.php'); ?>
    </div>
</div>

