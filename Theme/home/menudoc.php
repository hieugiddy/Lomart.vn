<?php
	if(isset($_GET['loaisp']))
		echo '<style>#'.$_GET['loaisp'].'{color:#fff;background:#000;border:0 !important}</style>';
	else
		echo '<style>#a001{color:#fff;background:#000;border:0 !important}</style>';
?>
<div class="mt-2">
	<a href="?#dssanpham" id="a001">001</a>
	<a href="?loaisp=a002#dssanpham" id="a002">002</a>
	<a href="?loaisp=a003#dssanpham" id="a003">003</a>
	<a href="?loaisp=a004#dssanpham" id="a004">004</a>
	<a href="?loaisp=a005#dssanpham" id="a005">005</a>
	<a href="?loaisp=a006#dssanpham" id="a006">006</a>
</div>