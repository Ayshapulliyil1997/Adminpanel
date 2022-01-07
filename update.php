<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

include_once 'config.php';
if(isset($_POST['submit']))
{
    $username=$_SESSION['username'];
     $name = $_POST['name'];
     $email = $_POST['email'];
     $gender = $_POST['gender'];
     $dob = $_POST['dob'];
     $address = $_POST['address'];
     $contact = $_POST['contact'];
     $admitted_branch = $_POST['admitted_branch'];
     $admitted_program= $_POST['admitted_program'];
     $institue = $_POST['institute'];
     $internship = $_POST['internship'];
     $projects = $_POST['projects'];
     $placement = $_POST['placement'];
     $result = $_POST['result'];
    
     $sql = " update  users1 set name='$name',email='$email',gender='$gender',dob='$dob',address='$address',contact='$contact',admitted_branch='$admitted_branch',admitted_program='$admitted_program',institute='$institue',internship='$internship',projects='$projects',placement='$placement',result='$result' where username='$username' ";
     if (mysqli_query($link, $sql)) {
         header("location: welcome1.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($link);
     }
     mysqli_close($link);
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
#customers {
font-family: Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 100%;
}

#customers td, #customers th {
border: 1px solid #ddd;
padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: rgb(165, 182, 218);}

#customers th {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #545857;
color: white;
}
input[type=button], input[type=submit], input[type=reset] {
background-color: #3c5f94;
border: none;
color: white;
padding: 16px 32px;
text-decoration: none;
margin: 4px 2px;
cursor: pointer;
}
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
    </style>
</head>
<body>
<h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
    <p>
    <div class="topnav" class="w3-right-align">
   
    <a href="welcome1.php">Profile</a>
  <a href="reset-password.php">Reset Password</a>
  <a  href="logout.php" >Sign Out</a>
  
</div>
<form id="form1" action="" method="post">
<div>
</div>
<h2 align="center"> Student Details:</h2>
<table id="customers"; cellspacing="5px" cellpadding="5%"; align="center">
  <tr> <th>Personel Information<th>  </tr>
 <tr>
        <td>Name:</td>
        <td class="style1"><input type="text" name="name" /></td>
 </tr>
 <tr>
         <td> Email:  </td>
        <td><input type="text" name="email">    </td></tr>
        <tr>
        <td>Gender:    </td>
        <td> <select name="gender" id="gender">
                  <option value="female">Female</option>
                   <option value="male">Male</option>
</select></td>  </tr>
        <tr>
        <td>Date of Birth:</td>
         <td><input type="date" name="dob"></td> </tr>
         <tr>
        <td> Address:    </td>
        <td> <input type="text" name="address"></td> </tr>
        <tr>
        <td> Contact:   </td>
        <td>  <input type="text" name="contact">  </td>   </tr>
   
<tr><th>Academic Details</th><th></th> </tr>
<tr><td>Admitted Branch   </td>
       <td>
            <select name="admitted_branch" id="admitted_branch">
                  <option value="B.Tech">B.Tech</option>
                   <option value="M.Tech">M.Tech</option>
                  <option value="other" >Others</option>
            </select>
      </td></tr>
<tr><td>Admitted Program</td>
<td>
            <select name="admitted_program" id="admitted_program">
                  <option value="IT">IT</option>
                   <option value="CSE">CSE</option>
                   <option value="EEE">EEE</option>
                   <option value="ECE">ECE</option>
                   <option value="MECH">MECH</option>
                   <option value="CIVIL">CIVIL</option>
                  <option value="other" >Others</option>
            </select>
      </td>
</tr>
<tr><td>Institute</td>
<td>
            <select name="institute" id="institute">
                  <option value="GECW">GECW</option>
                   <option value="GECP">GECP</option>
                   <option value="CET">CET</option>
                   <option value="GECT">GECT</option>
                   <option value="TKMCE">TKMCE</option>
                   <option value="NSSCE">NSSCE</option>
                   <option value="MAC">MAC</option>
                  <option value="RIT" >RIT</option>
                  <option value="GECB" >GECB</option>
                  <option value="GCEK" >GCEK</option>
                  <option value="GECI" >GECI</option>

            </select> </td></tr>
<tr><td>Internship</td>
<td>  <input type="text" name="internship">  </td>   </tr>
<tr><td>Projects</td>
<td>  <input type="text" name="projects">  </td></tr>
<tr><td>Placement</td>
<td>  <input type="text" name="placement">  </td></tr>
<tr><td>Result & CGPA</td>
<td>  <input type="text" name="result">  </td></tr>
<tr><td><a href="index1.php" >Upload file</a></td></tr>
<tr><td> <input type="submit" value="Submit"  name="submit" align="right"> </td></tr>
</table>
        
       
    </p>
</body>
</html>
