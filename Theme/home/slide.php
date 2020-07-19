<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8"/>
	<title>Document</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
body{
background: #f1f1f1
}

body::-webkit-scrollbar {
    width: 1px;
    background-color: #f1f1f1;
} 
body::-webkit-scrollbar-thumb {
    background-color: #777;
}
body::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
}
	#slider-control img {
    margin: 40px auto !important;
}
}
 #slider-text{
  padding-top: 40px;
  display: block;
}
#slider-text .col-md-6{
  overflow: hidden;
}

#slider-text h2 {
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 400;
  font-size: 30px;
  letter-spacing: 3px;
  margin: 30px auto;
  padding-left: 40px;
}
#slider-text h2::after{
  border-top: 2px solid #c7c7c7;
  content: "";
  position: absolute;
  bottom: 35px;
  width: 100%;
  }

#itemslider h4{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 400;
  font-size: 12px;
  margin: 10px auto 3px;
}
#itemslider h5{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: bold;
  font-size: 12px;
  margin: 3px auto 2px;
}
#itemslider h6{
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 300;;
  font-size: 10px;
  margin: 2px auto 5px;
}
.badge {
  background: #b20c0c;
  position: absolute;
  height: 40px;
  width: 40px;
  border-radius: 50%;
  line-height: 31px;
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 300;
  font-size: 14px;
  border: 2px solid #FFF;
  box-shadow: 0 0 0 1px #b20c0c;
  top: 5px;
  right: 25%;
}
#slider-control i{
  margin: auto  ;
  color: #000;
font-size: 35px;
padding-top:46%;
}
@media screen and (max-width: 1000px){
#slider-control i {
  color: #000;
font-size: 30px;
padding-top:80%;
}
}
@media screen and (max-width: 640px){
#slider-control i {
  color: #000;
font-size: 25px;
padding-top:130%;
}
}
#slider-control .left i{
  float: left;
}
#slider-control .right i{
float: right;
}
.carousel-showmanymoveone .carousel-control {
  width: 1%;
  background: transparent;
}
.carousel-control.left {
    background-image: none !important;
    
}
.carousel-control.right {
    background-image: none !important;
    
}
.carousel-showmanymoveone .cloneditem-1,
.carousel-showmanymoveone .cloneditem-2,
.carousel-showmanymoveone .cloneditem-3,
.carousel-showmanymoveone .cloneditem-4,
.carousel-showmanymoveone .cloneditem-5 {
  display: none;
}
@media all and (min-width: 768px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -50%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 50%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
    display: block;
  }
}
@media all and (min-width: 768px) and (transform-3d), all and (min-width: 768px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(50%, 0, 0);
    transform: translate3d(50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-50%, 0, 0);
    transform: translate3d(-50%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
@media all and (min-width: 992px) {
  .carousel-showmanymoveone .carousel-inner > .active.left,
  .carousel-showmanymoveone .carousel-inner > .prev {
    left: -16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .active.right,
  .carousel-showmanymoveone .carousel-inner > .next {
    left: 16.666%;
  }
  .carousel-showmanymoveone .carousel-inner > .left,
  .carousel-showmanymoveone .carousel-inner > .prev.right,
  .carousel-showmanymoveone .carousel-inner > .active {
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner .cloneditem-2,
  .carousel-showmanymoveone .carousel-inner .cloneditem-3,
  .carousel-showmanymoveone .carousel-inner .cloneditem-4,
  .carousel-showmanymoveone .carousel-inner .cloneditem-5,
  .carousel-showmanymoveone .carousel-inner .cloneditem-6  {
    display: block;
  }
}
@media all and (min-width: 992px) and (transform-3d), all and (min-width: 992px) and (-webkit-transform-3d) {
  .carousel-showmanymoveone .carousel-inner > .item.active.right,
  .carousel-showmanymoveone .carousel-inner > .item.next {
    -webkit-transform: translate3d(16.666%, 0, 0);
    transform: translate3d(16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.active.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev {
    -webkit-transform: translate3d(-16.666%, 0, 0);
    transform: translate3d(-16.666%, 0, 0);
    left: 0;
  }
  .carousel-showmanymoveone .carousel-inner > .item.left,
  .carousel-showmanymoveone .carousel-inner > .item.prev.right,
  .carousel-showmanymoveone .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
.item img {
    width: 100%;
    border-radius: 10px;
}
	</style>
</head>
<body>
       <!-- Item slider-->
            <div class="container-fluid">
              <div class="row px-5">
                <div class="col-12 col-sm-12 col-md-12">
                  <div class="carousel carousel-showmanymoveone slide" id="itemslider">
                    <div class="carousel-inner">
             
                      <?php
                        include('../connect.php');
                        $hot=$conn->prepare('select * from khuyenmai order by stt DESC');
                        $hot->execute();
                        if($hot->rowCount()>0){
                          $i=1;
                          while($row=$hot->fetch(PDO::FETCH_ASSOC)){
                            if($i==1){
                              echo '
                                <div class="item active">
                                  <div class="col-12 col-sm-6 col-md-4">
                                    <a href="/Lomart.vn/?Layout=khuyenmai&stt='.$row['stt'].'" title="'.$row['tenkm'].'" target="_parent">
                                      <img src="'.$row['hinhanh'].'" class="img-responsive center-block"><br>
                                    </a>
                                  </div>
                                </div>
                            ';
                            $i=0;
                          }
                          else
                            echo '
                                <div class="item">
                                  <div class="col-12 col-sm-6 col-md-4">
                                    <a href="/Lomart.vn/?Layout=khuyenmai&stt='.$row['stt'].'" title="'.$row['tenkm'].'" target="_parent">
                                      <img src="'.$row['hinhanh'].'" class="img-responsive center-block"><br>
                                    </a>
                                  </div>
                                </div>
                            ';
                          }
                        }
                        else 
                          echo 'Không có sản phẩm nào';
                      ?>
                    </div>
            <!-- left,right control -->
                    
                  </div>
                  <div id="slider-control">
                    <a class="left carousel-control" href="#itemslider" data-slide="prev"><i class="fa fa-arrow-circle-left"></i></a>
                    <a class="right carousel-control" href="#itemslider" data-slide="next"><i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
              </div>
</div>
</body>
<script type="text/javascript">
  $(document).ready(function(){
 
$('#itemslider').carousel({ interval: 3000 });
 
$('.carousel-showmanymoveone .item').each(function(){
var itemToClone = $(this);
 
for (var i=1;i<3;i++) {
itemToClone = itemToClone.next();
 
if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}
 
itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
});
 
  </script>
</html>