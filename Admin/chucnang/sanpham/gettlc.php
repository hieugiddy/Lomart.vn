<?php
	include('../connect.php');
	if($_GET['maTL']!=""){
		$gettlc=$conn->prepare('select maTLC,tenTLC from chitiettheloai where maTL='.$_GET['maTL']);
		$gettlc->execute();
		$i=1;
		while($row=$gettlc->fetch(PDO::FETCH_ASSOC))
			if($i==1){
				echo '<input type="radio" name="maTLC" value="'.$row['maTLC'].'" checked/>'.$row['tenTLC'].'<br>';
				$i=0;
			}
			else
				echo '<input type="radio" name="maTLC" value="'.$row['maTLC'].'"/>'.$row['tenTLC'].'<br>';

	}
?>