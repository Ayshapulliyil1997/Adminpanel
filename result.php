<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: right;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #04AA6D;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
.container {
  position: relative;
  font-family: Arial;
}

.text-block {
  position: absolute;
  bottom: 300px;
left: 700px;
  background-color: white;
  color: black;
  padding-left: 200px;
  padding-right: 200px;
  padding-bottom:100px ;
}
.img1{
  max-width: 100%;
  height: 100%;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  min-height: 100%;
}
.div {
  opacity: 0.5;
  width: 100px;
  height: 100px;
  background-color: #FFDFD3;
  animation-name: example;
  animation-duration: 4s;
}

@keyframes example {
  from {background-color: #957DAD;}
  to {background-color: #E0BBE4;}
}
* {
  position: relative;
  box-sizing: border-box;
}

.iframely-embed {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 50;
  background: white;
}

#app {
  // opacity: 0 !important;
  // visibility: hidden;
  z-index: 100;

  &:hover {
    opacity: 0.5;
  }
}

#app {
  display: grid;
  grid-template-columns: 1fr 2fr;
  align-items: center;
  padding-bottom: 4vmin;
  height: 90vh;
  width: 100%;
  background: #ede8e2;
  color: #3a3535;
}

body {
  display: grid;
  padding: 3vmin;
  background: #e6ded7;
}

@import url("https://fonts.googleapis.com/css2?family=Prata&display=swap");

.title {
  padding-left: 1em;
  grid-column: 1 / -1;
  grid-row: 1;

  font-family: "Prata", serif;
  font-size: 8vw;
  width: 100%;
  z-index: 2;

  // start

  > .title-inner {
    display: inline-block;
  }
}

@keyframes text-clip {
  from {
    clip-path: polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%);
  }
  to {
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
  }
}

@keyframes outer-left {
  from {
    transform: translateX(50%);
  }
  to {
    transform: none;
  }
}

@keyframes inner-left {
  from {
    transform: translateX(-50%);
  }
  to {
    transform: none;
  }
}

.cafe,
.mozart {
  animation: outer-left 1s 1s cubic-bezier(0.2, 0, 0.1, 1) both;
  // outline: 1px solid red;
}

// [class*='inner'] {
//   outline: 1px solid blue;
// }

.title-inner {
  display: inline-block;
  animation: inner-left 1s 1s ease both;
}

.cafe-inner {
  display: inline-block;
  animation: inner-left 1s 1s ease both,
    text-clip 1s 0s cubic-bezier(0.5, 0, 0.1, 1) both;
}

.mozart-inner {
  animation: text-clip 1s 0s cubic-bezier(0.5, 0, 0.1, 1) both;
}

.title {
  animation: outer-left 1s 1s ease both;
}

.cafe {
  // start
  > .cafe-inner {
    display: inline-block;
  }
}

.mozart {
  display: inline-block;
}

.image {
  grid-row: 1;
  grid-column: 2;
  margin-left: -2rem;
  opacity: 0.9;
  
  animation: image-in 1s cubic-bezier(0.5, 0, 0.1, 1) 2s backwards;

  @keyframes image-in {
    from {
      clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }
    to {
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }
  }

  img {
    display: block;
    width: 100%;
    height: auto;
  }
}

// Replay animation!
body:active * {
  animation: none !important;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

</style>
<body>
<?php
include "config.php"; // Using database connection file here
$username=$_SESSION['username'];
$records = mysqli_query($link,"SELECT * from header where username='$username'"); // fetch data from database

while($data = mysqli_fetch_array($records))
{

?>
<div class="navbar">
<img src="logoo1.jpg" alt="Nature" class="responsive" width="50" height="50">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
  <a href="#about"><?php echo $data['about']; ?></a>
  <a href="service.php"><?php echo $data['services']; ?></a>
  <a href="#contact">Contact</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<a href="result.php"><i class="fa fa-user"></i> Home</a>
<a href="service.php"><i class="fa fa-user"></i> Services</a>
  <a href="login.php"><i class="fa fa-user"></i> Admin Login</a>
</div>

<div id="app">
  <div class="title">
    <div class="title-inner">
      <div class="cafe">
        <div class="cafe-inner"><?php echo $data['heading8']; ?></div>
      </div>
      <div class="mozart">
        <div class="mozart-inner"><?php echo $data['heading9']; ?></div>
      </div>
    </div>
  </div>

  <div class="image">
    <img src="wrk.png" height="600"alt=''>
  </div>
  <a href="https://youtu.be/mBY62jtbMYM" target="_blank" data-keyframers-credit style="color: #000"></a>

</div>



<!--image
<div class="container">
  <img src="7.jpg" width="100%" height="500"alt="Nature" >
  <div class="text-block div">
    <h4><?php echo $data['heading8']; ?></h4>
    <p><?php echo $data['heading9']; ?></p>
  </div>
</div>-->
<!-- Sidebar/menu -->


<!--<div container>
<nav class="w3-sidebar w3-grey w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:200px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
     
      <img src="logoo1.jpg" alt="Nature" class="responsive" width="100" height="100">
    <h3 class="w3-padding-64"><b><u style="color:orange;"><?php echo $data['heading1']; ?></u></b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><?php echo $data['home']; ?></a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><?php echo $data['about']; ?></a> 
    <a href="service.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><?php echo $data['services']; ?></a> 
    
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
  </div>
</nav>
</div>-->
<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-grey w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-grey w3-margin-right" onclick="w3_open()">☰</a>
  <span><?php echo $data['heading1']; ?></span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b><?php echo $data['heading1']; ?></b></h1>
    
    <hr style="width:50px;border:5px solid orange" class="w3-round">
    <p><?php echo $data['company']; ?></p>
</div>
  <!-- Photo grid (modal) -->
  

  <!-- Modal for full size images on click-->
  

  <!-- Services -->
  <div class="w3-container" id="about" style="margin-top:75px">
    <h1 class="w3-xxxlarge "><b>Who We Are?.</b></h1>
    <hr style="width:50px;border:5px solid orange" class="w3-round">
    <p><?php echo $data['servicescon']; ?></p>
    <p><?php echo $data['servicescon1']; ?>
    </p>
  </div>
  
  <!-- Designers 
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge "><b>Services.</b></h1>
    <hr style="width:50px;border:5px solid orange" class="w3-round">
    <p><?php echo $data['aboutcon']; ?></p>
    <p><?php echo $data['aboutcon1']; ?>
    </p>
    
  </div>-->

  <!-- The Team 
  <h1 class="w3-xxxlarge"><b>Meet Our Team.</b></h1>
      <hr style="width:50px;border:5px solid orange" class="w3-round">
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        
        <div class="w3-container">
          <h3><?php echo $data['heading2']; ?></h3>
          <p class="w3-opacity"><?php echo $data['heading3']; ?></p>
          <p><?php echo $data['heading4']; ?></p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
       
        <div class="w3-container">
          <h3><?php echo $data['heading5']; ?></h3>
          <p class="w3-opacity"><?php echo $data['heading6']; ?></p>
          <p><?php echo $data['heading7']; ?></p>
        </div>
      </div>
    </div>
    
  </div>-->

  
  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge "><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid orange" class="w3-round">
    <p>Do you want us to style your home? Fill out the form and fill me in with the details :) We love meeting new people!</p>
    <form action="mailto:ayshapulliyil19@gmail.com" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-orange w3-margin-bottom">Send Message</button>
    </form>  
  </div>



<!-- End page content -->
</div>

<!-- W3.CSS Container -->

<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px">
<div class="w3-col m4 w3-margin-bottom">
   <div class="w3-light-grey">
  
     <div class="w3-container">
       <h3>Locate Us</h3>
       <p class="w3-opacity"><?php echo $data['contact']; ?></p>
       
     </div>
   </div>
 </div>
 <div class="w3-col m4 w3-margin-bottom">
   <div class="w3-light-grey">
     <div class="w3-container">
       <h3>Stay Connected</h3>
       <p><i class="fa fa-fw fa-phone"></i> <?php echo $data['phn']; ?></p>
        <p><i class="fa fa-fw fa-envelope"></i> <?php echo $data['email']; ?></p></div>
     </div>
   </div>
 </div>
 
</div>
<?php
}
?>
<?php mysqli_close($link); // Close connection ?>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

</body>
</html>

