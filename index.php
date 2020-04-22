<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel Uzbekistan</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body style="background-color: rgb(255,140,140);">
  <?php 
    include 'Istyle.php';
   ?>
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="gallery.php"><img src="images/FEntypo_d83c(0)_48.png"><b> Gallery</b></a>
  <a href="services.php"><img src="images/FEntypo_d83d(2)_48.png"><b> Servises</b></a>
  <a href="about.php"><img src="images/FEntypo_d83d(1)_48.png"><b> About Us</b></a>
  <a href="contact.php"><img src="images/FEntypo_d83d(0)_48.png"><b> Contact Us</b></a>
</div>

<div id="main">
  <button class="openbtn" style="position: fixed;" onclick="openNav()"> ☰ </button>  
</div>

<div style="color:#85093f;text-shadow: 2px 2px #da80cb; margin-top:-10px;margin-left: 50px;" class="col-md-11">
	<h1><i><b><marquee>HOTEL UZBEKISTAN</marquee></b></i></h1>
</div>
<div class="row mt-2">
  <div class="colL">
<div id="demo" class="carousel slide" data-ride="carousel" >
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
 <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/2019-01-16.jpg" alt="Hotel Uzbekistan" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/bosh.jpg" alt="Hotel Uzbekistan" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/1-rasm.jpg" alt="Hotel Uzbekistan" width="1100" height="500">
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
</div>
<div class="row m-2">
  <div class="col-md-12">
	    <iframe src="images/Uzbekistan hotel – Google Карты.html" height="400px" width="100%" id="demo1" class="collapse"></iframe>

        <p><a style="color: #6e073b; margin-left: 100px; font-family: Arial Black; font-size: 30px;" target="demo1" data-toggle="collapse" data-target="#demo1" href="images/Uzbekistan hotel Google Карты.html"><b><img style="right: 0;" src="images/FEntypo_e724(0)_48.png">Hotel Uzbekistanni kartadan ko'rish </b></a></p>
</div>
</div>




</body>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>

<script type="text/javascript">
  function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
</html>