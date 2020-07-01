<?php
	$connect= mysqli_connect("localhost","root","");
	mysqli_select_db($connect, "sieuthi");
	if(!$connect){
		echo "Không thể kết nối đến Database!".mysqli_connect_error($connect);
	}
	
?> 