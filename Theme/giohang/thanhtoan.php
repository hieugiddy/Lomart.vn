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

  function tinhtien(obj){
    var maSP=obj.id;
    var soluong=obj.value;
    var str='./Theme/giohang/capnhatgiohang.php?id='+maSP+'&soluong='+soluong;
    location.href=str;
  }

</script>