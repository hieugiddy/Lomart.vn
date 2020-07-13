<strong><h4>Danh mục</h4></strong>
	<?php
	if(isset($_GET['maTL'])){
		echo '<style>.'.$_GET['maTL'].'{color:#fff !important;background:#000 !important;border:0 !important} ';
		if(isset($_GET['maTLC']))
			echo '#'.$_GET['maTLC'].'{color:#900 !important;font-weight:700}</style>';
		else
			echo '#'.$_GET['maTL'].'{color:#900 !important;font-weight:700}</style>';
	}
	else
		if($_GET['Layout']=='chuyenmuc')
			echo '<style>#a000{color:#fff;background:#000;border:0 !important}</style>';
	?>
	<div class="mt-2">
	<a href="?Layout=chuyenmuc#dssanpham" id="a000">Tất cả sản phẩm</a>
	<?php 
	/*lấy danh sách thể loại chính*/
		$menuchinh=$conn->prepare('select * from theloai');
		$menuchinh->execute();
		
		if($menuchinh->rowCount()>0)
			while($row1=$menuchinh->fetch(PDO::FETCH_ASSOC)){
				echo '
					<button class="dropdown-btn '.$row1['maTL'].'">'.$row1['tenTL'].'
				    	<i class="fa fa-caret-down"></i>
				  	</button>
				  	<div class="dropdown-container">
				    	<a href="?Layout=chuyenmuc&maTL='.$row1['maTL'].'#dssanpham" id="'.$row1['maTL'].'"><i class="fa fa-chevron-right mr-2" style="font-size:12px"></i>Tất cả</a>
				';
				/* lấy danh sách thể loại con thuộc thể loại chính hiện hành*/
				$menucon=$conn->prepare('select maTLC, tenTLC from chitiettheloai where maTL="'.$row1['maTL'].'"');
				$menucon->execute();
				if($menucon->rowCount()>0)
					while($row2=$menucon->fetch(PDO::FETCH_ASSOC)){
						echo '<a href="?Layout=chuyenmuc&maTLC='.$row2['maTLC'].'&maTL='.$row1['maTL'].'#dssanpham" id="'.$row2['maTLC'].'"><i class="fa fa-chevron-right mr-2" style="font-size:12px"></i>'.$row2['tenTLC'].'</a>';
					}
				echo '</div>';
			}
		echo '
			</div>';

?>