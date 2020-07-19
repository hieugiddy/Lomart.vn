
<div id="chuyenmuc" class="col-12 col-sm-11 col-xl-9 mx-auto mt-5">
	<div id="dssanpham">
	<div class="row">

	<?php 
		if(!isset($_GET['thanhtoan'])){
			echo '<div class="col-12 col-md-2 theloai px-0 d-none d-md-block">';
			include('./Theme/chuyenmuc/menudoc.php');
			echo '</div>';
			echo '<div class="col-md-7 col-12 px-5 theloai-item">';
			if(isset($_GET['giohang']))
				include('./Theme/giohang/chitietgiohang.php');
			else
				include('./Theme/baiviet/thongtinsanpham.php');	
			echo '</div>';
			echo '
				<div class="col-md-3 col-12 px-3">';
					if(!isset($_GET['giohang']))
						include('./Theme/giohang/giohang_mini.php'); 
					echo ' <br>
					<iframe src="https://www6.cbox.ws/box/?boxid=845270&boxtag=yLtqS7" width="100%" height="350" allowtransparency="yes" allow="autoplay" frameborder="0" marginheight="0" marginwidth="0" scrolling="auto" ></iframe> 
				</div>';
	}
	else{
		echo '<div class="col-12 px-3">';
		include('./Theme/giohang/thanhtoan.php');
		echo '</div>';
	}
	?>
	</div>

	<?php if(!isset($_GET['thanhtoan']) && !isset($_GET['giohang'])) include('./Theme/baiviet/lienquan.php'); ?>


</div></div>


<script>
	var sl = document.getElementsByName("soluong");
	var dg= document.getElementsByClassName("tien-dg");
	var tt= document.getElementsByClassName("tien-tt");
	var tienhang=document.getElementById("tienhang");
	var s=0;
  for (var i = 0; i < sl.length; i++) {
    tt[i].innerHTML=""+sl[i].value*dg[i].innerHTML;
    s+=parseFloat(tt[i].innerHTML);
  }
    
  tienhang.value =s;

  function capnhat(obj){
    var maSP=obj.id;
    var soluong=obj.value;
    var str='./Theme/giohang/capnhatgiohang.php?id='+maSP+'&soluong='+soluong;
    location.href=str;
  }

</script>