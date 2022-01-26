<!DOCTYPE html>
<html>
<head>
  <title>View Events</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">

  <style type="text/css">

body{
      font-family: Century;
       background: #f1f1f1;
    }
*{
  margin: 0;
  padding: 0;
  font-family: Century;
  box-sizing: border-box;
}

header 
{
  height: 70vh;
  width: 100%;
 background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}



.card{
  margin-left: 100px;
  margin-right: 100px;
margin-top: 50px;

  background-color: white;
  padding: 30px;
  padding-bottom: 50px; 
}
.card h4{
  text-align: center;
}

.card1{
margin-top: 50px;
margin-left: 220px;
margin-right: 220px;
  background-color: #f1f1f1;
  padding: 30px;
  padding-bottom: 50px; 
  width: 60%;
  height: auto;
}

.card1:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

</style>
</head>
<body>
<div class="topnav">


  <a class="active" href="home.php">Home</a>
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
    <button class="dropbtn">  <a  href="#">Membership</a>

      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="registration.php">Registration</a>
      <a href="myaccount.php">Account Login</a>
    </div>
  </div> 
 
  
     <a href="#about">Gallery</a>
  <a href="donate.php">Sponsors and Donors</a>
  <a href="News.php">News/Notice</a>
  <a href="contact.php">Contact Us</a>
    <a href="https://juniv.edu/" target="_blank">JU</a>

</div>
<div class="card">
<h2>Upcoming Events</h2>
  <div class="card1">
    
    <h3>Title</b></h3> 
    <h3>Date</b></h3> 
    <p>Description</p>
  </div>
   <div class="card1">
    
    <h3>Title</b></h3> 
    <h3>Date</b></h3> 
    <p>Description</p>
  </div>
  <div class="card1">
    
    <h3>Title</b></h3> 
    <h3>Date</b></h3> 
    <p>Description</p>
  </div>
  
</div>
<div class="card">
<h4>Past Events</h4>
  
    <h3>Title</b></h3> 
    <h3>Date</b></h3> 
    <p>Description</p>
</div>

</body>
</html>