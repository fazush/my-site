<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Services</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
  
</head>

<body>
<?php 
  include 'Sstyle.php';
 ?>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php"><img src="images/SEntypo_2302(0)_48.png"><b>First Page</b></a>
  <a href="gallery.php"><img src="images/SEntypo_d83c(2)_48.png"><b>Gallery</b></a>
  <a href="about.php"><img src="images/SEntypo_d83d(1)_48.png"><b>About Us</b></a>
  <a href="contact.php"><img src="images/SEntypo_d83d(3)_48.png"><b>Contact Us</b></a>
</div>
<div id="main">
  <span style="font-size:30px;cursor:pointer;position: fixed;" onclick="openNav()">&#9776;</span>
</div>


<div style="font-family: Harlow Solid Italic; margin-top: -50px; color:#85093f;text-shadow: 2px 2px #da80cb;text-align:center;">
    <h1 style="font-size: 100px;"><i>Hotel Uzbekistan xizmatlari.</i></h1>
</div>


	<div class="row m-5">
		<div class="col">
			<hr>
			<h1>Qulayliklar.</h1>
			<p><b>Uzbekistan Hotel</b> - Urganch shahrida joylashgan mehmonxonasida restoran , bepul velosiped , bar va umumiy dam olish maskaniga ega . Mehmonxonada yopiq basseyn , fitnes markazi , karaoke va 24 soat xizmat ko'rsatish xizmatlari mavjud .<br> Mehmonxonadagi xonalar yassi ekranli telavizorlar bilan jihozlangan . " O'zbekiston " mehmonxonasida har bir xonada konditsioner va shaxsiy hammom mavjud . <br> Turar joy kontinental yoki buferli nonushta taklif qiladi.<br> " O'zbekiston " mehmonxonasining sog'lomlashtirish zonasi hammom va saunadan iborat . Ushbu hudud velosipedda yurish uchun moslashgan bo'lib , mehmonxonada velosiped va avtomobil ijarasi mavjud . <br> " O'zbekiston " mehmonxonasi biznes markazi , bepul WiFi ulanishi va bepul avtoturargohni taklif qiladi . 
			</p>
			<hr>
		</div>
	</div>
  
	<div class="row ml-5 mt-5">
		<div class="col">
		<h1>Imkoniyatlar.</h1>
		</div>
	</div>
	<div class="row m-5">
		<div class="col-md-4">
			<img src="images/Entypo_2713(0)_48.png">Bepul avtoturarjoy<br>
			<img src="images/Entypo_2713(0)_48.png">Bepul WiFi<br>
			<img src="images/Entypo_2713(0)_48.png">Yopiq hovuz<br>
			<img src="images/Entypo_2713(0)_48.png">Karaoke xonasi<br>			
		</div>
		<div class="col-md-4">
			<img src="images/Entypo_2713(0)_48.png">Ijaraga avtomobil<br>
			<img src="images/Entypo_2713(0)_48.png">Ijaraga velosiped<br>
			<img src="images/Entypo_2713(0)_48.png">Lift<br>
			<img src="images/Entypo_2713(0)_48.png">Oilaviy xona<br>			
		</div>
		<div class="col-md-4">
			<img src="images/Entypo_2713(0)_48.png">Gazetalar<br>
			<img src="images/Entypo_2713(0)_48.png">Servis xizmati<br>
			<img src="images/Entypo_2713(0)_48.png">Bolalar uchun multfilm<br>
			<img src="images/Entypo_2713(0)_48.png">Aeroportga olib borish<br>			
		</div>
	</div>

	<div class="row ml-5 mt-5">
		<div class="col">
		<h1>Oziq-ovqat & Ichimlik.</h1>
		</div>
	</div>
	<div class="main">
	<div class="row m-5" style="font-family: Times New Roman; color: red;">
  		<div class="column">
    		<div class="content">
    			<h3>Nonushta</h3>
      			<img src="images/unnamed (19).jpg" style="width:100%">
      				<p>
<b>Har kungi xizmat vaqti</b><br></p><p>
   07:00 dan 10:00 gacha<br>	
   <ul><i>Oziq-ovqat</i><br>
     <li>Non</li>
     <li>Shirinliklar</li>
     <li>Pshloq</li>
     <li>Mevalar</li>
     <li>Issiq ovqat</li>
   </ul>
   <ul><i>Ichimliklar</i><br>
      <li>Coffee</li>
      <li>Choy</li>
      <li>Meva sharbati</li>
   </ul>
         				</p>
    		</div>
  		</div>
	</div>
	</div>	
</body>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
</html>