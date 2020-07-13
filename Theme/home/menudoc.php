<?php
	if(isset($_GET['loaisp']))
		echo '<style>#'.$_GET['loaisp'].'{color:#fff;background:#000;border:0 !important}</style>';
?>
<div class="mt-2">
	<?php 
		$list_menu=$conn->prepare('select * from theloai');
		$list_menu->execute();
		if($list_menu->rowCount()>0)
			$i=1;
			while($row=$list_menu->fetch(PDO::FETCH_ASSOC)){
				if($i==1){
					echo '<a href="?#dssanpham" id="'.$row['maTL'].'">'.$row['tenTL'].'</a>';
					if(!isset($_GET['loaisp']))
						echo '<style>#'.$row['maTL'].'{color:#fff;background:#000;border:0 !important}</style>';
					$i=0;
				}
				else
				echo '<a href="?loaisp='.$row['maTL'].'#dssanpham" id="'.$row['maTL'].'">'.$row['tenTL'].'</a>';
			}
	?>
	
</div>