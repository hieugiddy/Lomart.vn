<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<style>
    body::-webkit-scrollbar {
        width: 6px;
        background-color: #F5F5F5;
    } 
    body::-webkit-scrollbar-thumb {
        background-color: #777;
    }
    body::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #F5F5F5;
    }
    #theloaiccon td button,#theloaichinh .xoa{
      border: 1px solid #f1f1f1;
      background: #fff;
      padding: 5px 7px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.5s
    }
    #theloaicon td button:hover{
      background: #900;
      color: #fff
    }
	</style>
</head>
<body>
	<table class="table table-striped" id="theloaiccon">
   <thead>
      <tr>
         <th>ID</th>
         <th>Tên thể loại con</th>
         <th>Hành động</th>
      </tr>
   </thead>
  <?php
  include('../connect.php');
	 $xuattlc = $conn->prepare("select * from chitiettheloai where maTL='".$_GET['id']."'");
   $xuattlc->execute();
	 while($rs = $xuattlc->fetch(PDO::FETCH_ASSOC)){
		echo "<tr>";
      		echo "<td>".$rs["maTLC"]."</td>";
          echo "<td id='".$rs["maTLC"]."'>".$rs["tenTLC"]."</td>";
  ?>

      	<td>

	         <button onclick="sua('<?php echo $rs['maTLC'];?>')"><i class="fa fa-edit mr-1"></i>Sửa</button>
	         <button><a class="xoa" href="xoatlc.php?maTLC=<?php echo $rs['maTLC'];?>"onclick="return confirm('Ban co chac chan khong?');" target="_parent"><i class="fa fa-trash mr-1"></i>Xóa</a></button>

         </td>
         <?php
      	echo "</tr>";
	}?>
</table>
</body>
<script>
  function sua(id){
    var tenloai=document.getElementById(id);
    var temp=tenloai.innerText;
    tenloai.innerHTML="<form action='suatlc.php' method='get'><input type='hidden' name='idTLC' value='"+id+"'/> <input type='text' name='tenTLC' value='"+temp+"'/><input type='submit' class='btn btn-success ml-2' value='Lưu'></form>";
  }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</html>
