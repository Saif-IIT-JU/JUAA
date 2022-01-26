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
margin-top: 100px;
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
margin-left:290px;
margin-bottom: 20px;
font-size: 15px;  
}
            
.button:hover {
opacity: 1;
}

.fbutton {
 border: none;
 color: black;
 width: 33%;
background-color: #C2C6CA;
padding: 10px 20px;
text-align: center;
text-decoration: none;
cursor: pointer;
margin-left:450px;

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
<?php
	$uname = $_GET['param1'];
?>

<form action="login3.php?param1=<?php echo $uname ?>" method="post">
    <h3>Please login if you are already a member</h3><br><br><br>

    <div class="input-container">
      <label>Email</label><br>
  <input class="input-field"  type="Email" name="email" placeholder="Enter your email here" autocomplete="off">
    </div>

    <div class="input-container">
    <label>Password</label><br>
  <input class="input-field"  type="Password" name="password" placeholder="Enter password" autocomplete="off">
    </div>

  <p style="text-align: center "><input type="submit" value="Login" name="submit"> </p>

    
</form>

<button type="button" class="fbutton"><a href="forgotpassform.php" style="text-decoration: none; color: green; " >Forgot Passowrd</a></button>

</body>
<footer>
<div class="address">
  <h3>Jahangirnagar University Alumni Association</h3>
  <address>Register Building,Room No #131<br>Jahangirnagar University,Savar,Dhaka
       </address><br>
  <p>Contact Numbers:<br>(01876783515-520)</p>
<p >Gmail:alumni@juniv.edu</p> 
</footer>
</html>