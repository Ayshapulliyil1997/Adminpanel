<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

include_once 'config.php';
$status = $statusMsg = ''; 

if(isset($_POST['submit']))
{
    $username=$_SESSION['username'];
     $home = $_POST['home'];
     $about = $_POST['about'];
     $services = $_POST['services'];
     $heading = $_POST['heading'];
     $content = $_POST['content'];
     $heading1 = $_POST['heading1'];
     $servicescon = $_POST['servicescon'];
     $servicescon1 = $_POST['servicescon1'];
     $heading2 = $_POST['heading2'];
     $aboutcon = $_POST['aboutcon'];
     $aboutcon1 = $_POST['aboutcon1'];
     $heading3 = $_POST['heading3'];
     $contact = $_POST['contact'];
     $heading4 = $_POST['heading4'];
     $heading5 = $_POST['heading5'];
     $heading6 = $_POST['heading6'];
     $heading7 = $_POST['heading7'];
     $heading8 = $_POST['heading8'];
     $heading9 = $_POST['heading9'];
     $company = $_POST['company'];
     $phn = $_POST['phn'];
     $email= $_POST['email'];
     $sql = " update  header set home='$home',about='$about',services='$services', heading = '$heading',content = '$content', heading1 = '$heading1',servicescon = '$servicescon',servicescon1 = '$servicescon1', heading2 = '$heading2',aboutcon = '$aboutcon', aboutcon1 = '$aboutcon1',heading3 = '$heading3',heading4 = '$heading4',heading5 = '$heading5',heading6 = '$heading6',heading7 = '$heading7',contact = '$contact',heading8 = '$heading8', heading9 = '$heading9',phn = '$phn',email = '$email',company ='$company' where username='$username' ";
     if (mysqli_query($link, $sql)) {
         header("location: result.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($link);
     }
     mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>
<form  action="" method="post" enctype="multipart/form-data">
<div class="container">
  
  <div class="text-block">
    <h4 style="text-align: center;" >Add qoutes:<input type="text" name="heading8" /></h4>
    <p style="text-align: center;" >Description:<input type="text" name="heading9" /></p>
  </div>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-grey w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
  <input type="file" name="image" value="" />
  <!--<img src="logoo1.jpg" alt="Nature" class="responsive" width="100" height="100">-->
    <h3 class="w3-padding-64"><b>Company<br>Name</b></h3><input type="text" name="heading1" placeholder="Add company name"  />
  </div>
  <div class="w3-bar-block">
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"></a><input type="text" name="home" placeholder="Add content" />
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"></a> <input type="text" name="about"placeholder="Add content"  />
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"></a> <input type="text" name="services" placeholder="Add content" />
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <img src="logoo1.jpg" alt="Nature" class="responsive" width="50" height="30">
  <span>Company Name</span><input type="text" name="heading1" />
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>company name</b></h1><input type="text" name="heading1" placeholder="Add company name"/>
    
    <hr style="width:50px;border:5px solid orange" class="w3-round">
    <p><input type="text" name="company" placeholder="Add company info" /></p>
  </div>
  
  <!-- Photo grid (modal) -->


  <!-- Modal for full size images on click-->
  

  <!-- Services -->
  <div class="w3-container" id="About" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Who We Are?.</b></h1>
    <hr style="width:50px;border:5px solid orange" class="w3-round">
    <p><textarea rows="10" cols="60" name="servicescon" placeholder="Add about company "required></textarea></p>
    <p><textarea rows="10" cols="60" name="servicescon1"  placeholder="Add about company " required></textarea></p>
  </div>
  
  <!-- Designers -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge"><b>Services.</b></h1>
    <hr style="width:50px;border:5px solid orange" class="w3-round">
    <p><textarea rows="10" cols="60" name="aboutcon"  placeholder="Add  company  services"required></textarea></p>
    <p><textarea rows="10" cols="60" name="aboutcon1" placeholder="Add  company  services"></textarea>
    </p>
   
  </div>

  <!-- The Team -->
  <h1 class="w3-xxxlarge"><b>Meet Our Team.</b></h1>
      <hr style="width:50px;border:5px solid orange" class="w3-round">
  <div class="w3-row-padding w3-grayscale">
 
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
     
        <div class="w3-container">
          <h3>Name</h3><input type="text" name="heading2" />
          <p class="w3-opacity">Position</p><input type="text" name="heading3" />
          <p>About</p><input type="text" name="heading4" />
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <div class="w3-container">
          <h3>Name</h3><input type="text" name="heading5" />
          <p class="w3-opacity">Position</p><input type="text" name="heading6" />
          <p>About</p><input type="text" name="heading7" />
        </div>
      </div>
    </div>
    
  </div>

  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge "><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid orange" class="w3-round">
    <div class="w3-row-padding w3-grayscale">
 
 <div class="w3-col m4 w3-margin-bottom">
   <div class="w3-light-grey">
  
     <div class="w3-container">
       <h3>Locate Us</h3>
       <p class="w3-opacity">Address</p><input type="text" name="contact" />
       
     </div>
   </div>
 </div>
 <div class="w3-col m4 w3-margin-bottom">
   <div class="w3-light-grey">
     <div class="w3-container">
       <h3>Stay Connected</h3>
       <p><i class="fa fa-fw fa-phone"></i> <input type="text" name="phn"  placeholder="phone"/></p>
        <p><i class="fa fa-fw fa-envelope"></i> <input type="text" name="email" placeholder="email"/></p>
     </div>
   </div>
 </div>
 
</div>
  </div>
  <input style= "color: orange;"type="submit" name="submit" value="Submit">
<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="http://ayshawebdev.epizy.com"  target="_blank" class="w3-hover-opacity">Aysha P</a></p></div>

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
</script>

</body>
</html>

