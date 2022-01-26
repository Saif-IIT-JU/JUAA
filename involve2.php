

<!DOCTYPE html>
<html>
<head>
	<title>My Account</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		


form{
	border-style: solid;
border-color: grey;
margin-top: 200px;
 margin-left: 515px;
margin-right: 500px;	
padding-top:10px;
padding-left: 20px;
margin-bottom: 50px;
}



 h3{
text-align: center;
font-size: 25px;
}

.input-container{
padding-bottom: 30px;
width: 100%;
}

.input-field {
width:90%;
padding: 10px;
background:#EEEAE9;
outline: none;
border: 1px transparent;  
}

.input-field:focus {
border: 1px grey;
}
.textarea-field {
height: 120px;
width: 90%;
padding: 10px;
background:#EEEAE9;
outline: none;
border: 1px transparent; 
}

.button {
 border: none;
 color: black;
background-color: #C2C6CA;
padding: 10px 20px;
text-align: center;
text-decoration: none;
cursor: pointer;
margin-left:190px;
margin-bottom: 20px;
font-size: 15px;  
}
            
.button:hover {
opacity: 1;
}

.fbutton {
 border: none;
 color: black;
 width: 25%;
background-color: #C2C6CA;
padding: 10px 20px;
text-align: center;
text-decoration: none;
cursor: pointer;
margin-left:520px;

margin-bottom: 10px;
font-size: 15px; 
margin-bottom: 200px; 
}
            
.button:hover {
opacity: 1;
}

	</style>
</head>
<body>

<div class="topnav">


  <a href="home.php">Home</a>
<div class="dropdown">
    <button class="dropbtn">  <a href="#">About Us</a>

      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="about1.php">Our Mission</a>
      <a href="committee.php">Committee</a>
    </div>
  </div> 

  <a href="activity.php">Activities</a>
  <a href="involve.php">Get Involved</a>
  <div class="dropdown">
    <button class="dropbtn">  <a class="active"  href="#">Membership</a>

      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="registration.php">Registration</a>
      <a href="temp1.php">Account Login</a>
    </div>
  </div> 
 
     <a href="gallery.php">Gallery</a>
  <a href="donate.php">Sponsors and Donors</a>
  <a href="News.php">News & Event</a>
  <a href="contact.php">Contact Us</a>
    <a href="https://juniv.edu/" target="_blank">JU</a>

</div>
<br><br><br><br>
<h1 style="text-align: center;">

<?php

	
	$fname = $_POST['fname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$ca = $_POST['ca'];
	$donor = $_POST['donor'];
	$ap = $_POST['ap'];


	if(empty($fname) || empty($phone) || empty($email)){
		echo "Enter FullName, Phone No and Email.<br><br><br><br><br><br><br><br><br><br><br><br>"; return;
	}

	$cnt = 0;
  	for($i = 0; $i<11; $i++){
    $c = $phone[$i];
    if($c >= '0' && $c <='9') $cnt++;
  	}
  	if($cnt!=11){
    echo "<h3>Contact Number Is Not Valid. Please Insert Valid Contact Number.</h3>"; return;
  	}

	$conn = mysqli_connect('localhost', 'root', '', 'project');
	if(!$conn){
		echo "Connection Error<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; return;
	}
	else{
		$q = "INSERT INTO involve (fname, phone, email, ca, donor, ap) VALUES('".$fname."', '".$phone."', '".$email."', '".$ca."', '".$donor."', '".$ap."') ";
		$r = mysqli_query($conn, $q);

		if($r){
			echo "Congratulation!!! Now your are connected to JUAA.<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
		}
		else{
			echo "Failed submission. Try again<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; return;
		}
	}

?>

</h1>

<meta http-equiv="refresh" content="5; URL='home.php'"/> 

</body>
<footer>
<div class="address">
  <h3>Jahangirnagar University Alumni Association</h3>
  <address>Register Building,Room No #131<br>Jahangirnagar University,Savar,Dhaka
       </address><br>
  <p>Contact Numbers:<br>(01876783515-520)</p>
<p >Gmail:alumni@juniv.edu</p><p class="copyright " style="color: white" align="right" style="font-size: 2px">&copy;Copyright JUAA.2020:All rights reserved</p> 
</footer>
</html>