<?php
	if(isset($_GET['stt'])){
		$km=$conn->prepare('select tenkm,noidung from khuyenmai where stt='.$_GET['stt'])	;
		$km->execute();

	}
?>

<div id="nd_km" class="col-9 mx-auto mt-2">
	<?php
	if(isset($_GET['stt'])){
		$km=$conn->prepare('select tenkm,noidung from khuyenmai where stt='.$_GET['stt'])	;
		$km->execute();
		$getkm=$km->fetch(PDO::FETCH_ASSOC);
		echo '
			<center><h4>'.$getkm['tenkm'].'</h4></center>
			<hr>
			<div id="nd">
				'.$getkm['noidung'].'
			</div>
		';
	}
	?>
	<hr>
	<center><a href="/Lomart.vn" class="btn bg-light text-dark" onclick="quaylai()">Quay lại trang chủ</a></center>
</div>
