<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
<?php 
  include 'Cstyle.php';
 ?>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php" id="first"><b>First Page</b><img src="images/CEntypo_2302(2)_48.png"></a>
  <a href="gallery.php" id="galer"><b>Gallery </b><img src="images/CEntypo_d83c(0)_48.png"></a>
  <a href="about.php" id="about"><b>About Us </b><img src="images/CEntypo_d83d(1)_48.png"></a>
  <a href="services.php" id="contact"><b>Service </b><img src="images/CEntypo_d83d(3)_48.png"></a>
</div>

<h1 class="glow">Contact Us</h1>

<div class="container">
<div id="btnContainer">
<button style=" margin-right: 80%;" class="btn" onclick="listView()"><img src="images/CList.png"> List</button> 
<button class="btn active" onclick="gridView()"><img src="images/CGrid.png"> Grid</button>
</div>
<br>
<div class="row">
  <div class="column">
    
      <div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <h2 style="color: green; margin-top: 20px;"><img src="images/CCall.png"> Chaqiruv</h2>
    </div>
    <div class="flip-box-back">
      <h2><img src="images/CCall2.png">8 62 226 00 77</h2>
    </div>
  </div>
      </div>

  </div>

  <div class="column">
<div class="columnn">
<button onclick="document.getElementById('id01').style.display='block'" style="width:100%; background-color: transparent; color: green;"><h2><img src="images/CSms.png"> S M S </h2></button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="C:\xampp\htdocs\FazilatSaytPhp\index.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/img_avatar.png" alt="Avatar" class="avatar">
    </div>
<h2 style="text-align: center;">Hotel Uzbekistan</h2>
    <div class="container">
      <label for="uname"><b>Xabar</b></label><br>
      <textarea placeholder="Xabaringizni kiriting" name="uname" required></textarea>
<button type="submit">Jo'natish</button>
      </div>
    <div class="container" style="background-color:#f1f1f1">
      <button style="background-color: red;" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
   </div>
  </form>
</div>
</div>
  </div>
</div>



<div class="row">
  <div class="column">
<button onclick="myCopy()" style="color: green;background-color: transparent; width: 100%;"><img src="images/CTg.png">Telegram manzilimiz</button>
  </div>

  <div class="column">
<button onclick="myCopy2()" style="color: green; background-color: transparent; width: 100%;"><img src="images/insta.png" width="40px;">Instagram manzilimiz</button>
  </div>

</div>

<div class="row">
  <div class="column">
        <a style="color: green; text-align: center;" target="demo1" data-toggle="collapse" data-target="#demo1" href="images/Uzbekistan hotel – Google Карты.html"><h2>Hotel Uzbekistanni kartadan ko'rish</h2></a>

          <iframe src="images/Uzbekistan hotel Google Карты.html" height="400px" width="100%" id="demo1" class="collapse"></iframe>
  </div>
  <div class="column">
<button class="collapsible"style="width:100%;text-align: center; background-color: transparent; color: green;"><h2>Bizga xabar yuborish</h2></button>
<div class="content">
<div class="container" id="myForm">
  <form action="C:\xampp\htdocs\FazilatSaytPhp\index.php" class="form-container">
    <h3>Bizga xabar / savol yuborish</h3>
    <p>Elektron pochta orqali xabar yuboring va biz tez orada sizga javob beramiz.</p>
    <label for="msg"><b>Ism : </b></label>
    <input type="text" placeholder="Ismingizni yozing" name="msg" required></input><br>
    <label for="msg"><b>E-mail :</b></label>
    <input type="E-mail" placeholder="E-mailingizni kiriting" name="msg" required></input><br>
    <div>
        <label><b>Jinsingiz</b></label>
        <label for="er"><i>Erkak</i></label>
        <input type="radio" tabindex="tabindex" required="required" name="jins" id="er">
        <label for="ay"><i>Ayol</i></label>
        <input type="radio" tabindex="tabindex" required="required" name="jins" id="ay">
    </div>
    <div>
        <label><b>Tug'ilgan sanangizni kiriting</b></label>
            <input type="date">
    </div>
     <label for="country"><b>Shahar nomi</b></label>
    <select id="country" name="country">
      <option value="australia">Urganch</option>
      <option value="canada">Toshkent</option>
      <option value="usa">Samarqand</option>
      <option value="usa">...</option>
    </select><br>
    <label for="msg"><b>Mavzu</b></label>
    <input type="text" placeholder="Mavzu" name="msg" required></input><br>
    <label for="msg"><b>Xabar</b></label><br>
    <textarea placeholder="Xabar yoki savolingizni yozing .." name="msg" required></textarea>
    <button type="submit" class="btn">Xabar yuborish</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Yopish</button>
  </form>
</div>
</div>
  </div>
</div>
</div>

</body>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">

	function myFunction(x) {
    if (x.matches) { 
        document.body.style.backgroundColor = "#00005e";
    } else {
        document.body.style.backgroundColor = "pink";
    }
}


var x = window.matchMedia("(max-width: 800px)")
myFunction(x) 
x.addListener(myFunction) 



var elements = document.getElementsByClassName("column");
var i;
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}


var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}


var coll = document.getElementsByClassName("collapsible");
var i;
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}


var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



function myCopy() {
  var copyText="t.me/hotelUzbekistanuz";
document.execCommand("copy");
  alert("Copied the text: " + copyText);
}
function myCopy2() {
  var copyText="HotelUzbekistanUz";
document.execCommand("copy");
  alert("Copied the text: " + copyText);
}
</script>
</html>