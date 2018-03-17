<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
.fa {
  padding: 10px;
  font-size: 10px;
  width: 10px;
  text-align: center;
  text-decoration: none;
  margin: 1px 1px;
}
.fa:hover{
	opacity:0.7;
}
.fa-facebook{
	background:#3B5998;
	color:white;
}
.fa-twitter{
	background:#55ACEE;
	color:white;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #3B5998;
}
b.{
	background-color:"blue";
	
}



* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>






  </head>
<body>
<div >
<div align="left">
<img src="netcamp-logo.jpg" width="500px">
</div>
<div align="right" >

Follow Us: <a href="netcamp-home-facebook" class="fa fa-facebook" ></a>
<a href="netcamp-home-twitter" class="fa fa-twitter"></a><br><br>
<p><span><p style="color:black;"><i class="fa fa-mobile fa_mobile"></i><strong>Call Us/Whatsapp:+91 93310 90003</strong></span></p>
</div>
</div>
<div align="right">
<ul align="right" >
 <li><a  href="Code.php">Code breakers</a></li>
 <li><a href="Test.php">Test Your skill</a></li>
 <li><a href="Prac.php">Practice papers</a><li>
 <li><a href="Networking.php">Networking Tools</a></li>
 
 </ul>
</div>
  <hr>
<marquee direction="left"><h1>Current program is going in MNNIT Allahabad</h1></marquee>
<hr>
<ul >
 <li><a class="active" href="Home.php">Home</a></li>
 <li><a href="Login.php">Login</a></li>
 <li><a href="Regi.php">Registration</a><li>
 <li><a href="Course.php">Cousre</a></li>
 <li><a href="Contact.php">Contact us</a></li>
 <li><a href="About.php">About Us</a></li>
 </ul>
 

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="download1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="download2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="download3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="download4.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
 <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="head.jpg" target="_blank">
          <img src="head.jpg" class="img-circle"alt="Lights" style="width:55%">
          <div class="caption">
		  <h1>MNNIT Allahabad</h1>
            <p>Network Management & Ethical hacking with Web Development 3rd December-18th December</p>
			<a href="Registration.php">Click here for Detail</a>
          </div>
        </a>
      </div>
    </div>
 <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="lnmiitindex1.jpg" target="_blank">
          <img src="lnmiitindex1.jpg" class="img-circle"alt="Lights" style="width:60%">
          <div class="caption">
		  <h1>Lnmiit jaipur</h1>
            <p>Network Management & Ethical hacking with Web Development 12th June-2nd July 2018</p>
          <a href="Registration.php">click here for Detail</a>
		  </div>
        </a>
      </div>
    </div>
 <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="index34.jpg" target="_blank">
          <img src="index34.jpg" class="img-circle"alt="Lights" style="width:65%">
          <div class="caption">
		  <h1>HRIT Ghaziabad</h1>
            <p>Network Management & Ethical hacking with Web Development 5th July-25th July 2018</p>
			<a href="Registration.php">Click here for detail</a>
          </div>
        </a>
      </div>
    </div>
 </body>
 </html>
 