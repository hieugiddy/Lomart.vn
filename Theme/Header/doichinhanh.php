<?php
	ob_start();
	session_start();
	if(isset($_GET['lc_chinhanh'])){
		switch ($_GET['lc_chinhanh']) {
			case 'dn':
				$_SESSION['chinhanh']='75 Cao Thắng, Thanh Bình, Q. Hải Châu, Đà Nẵng, Việt Nam';
				$_SESSION['value']='dn';
				break;
			
			case 'hcm':
				$_SESSION['chinhanh']='75 Đường Gò Dầu, Tân Quý, Tân Phú, Hồ Chí Minh, Việt Nam';
				$_SESSION['value']='hcm';
				break;

			case 'hn':
				$_SESSION['chinhanh']='12 Bạch Mai, Cầu Dền, Hai Bà Trưng, Hà Nội, Việt Nam';
				$_SESSION['value']='hn';
				break;
		}
	}
	echo '<script>location.href=\'/Lomart.vn\';</script>';
?>