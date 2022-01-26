<!DOCTYPE html>
<html>
<head>
  <title>contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>

.row {
  display: flex;
}

.input-field {
            width:130%;
            padding: 10px;
            background:#EEEAE9;
            outline: none;
            border: 1px transparent;  

            }

.input-container{
          padding-bottom: 20px;
          width: 200%;
          }

.column {
  border: 1px solid black;
  background-color: lightblue;
  padding-top: 30px;
  padding-right: 00px;
  padding-bottom: 10px;
  padding-left: 30px;
}
.column2 {
  border: 1px solid black;
  background-color: lightblue;
  padding-top: 30px;
  padding-right: 500px;
  padding-bottom: 50px;
  padding-left: 10px;
}

.card1{

  background-color: lightgrey;
  padding: 30px;
  padding-top: 50px;
  padding-left: 100px;
  padding-bottom: 50px;
  padding-right: 200px;
  margin-top: -30px;
  margin-left: 100px;
  margin-right: 100px;
  margin-bottom: -70px;
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
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>

<script type="text/javascript">
    function validateForm(){
      var x = document.forms["myForm"]["contact"].value;
      if(x==""){
        alert("contact number must be filled out"); return false;
      }
      var l = x.length;
      if(l<11 || l>11){
        alert("contact number is too sort or too large"); return false;
      }

      var xx = x.toString();
      var s = xx.slice(0,3);
      if(!(s=="017" || s=="019" || s=="015" || s=="013" || s=="014" || s=="016" || s=="018")){
        alert("contact code is not valid"); return false;
      }
      
    }
  </script>

</head>

<body>

<div class="topnav">


  <a  href="home.php">Home</a>
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
      <a href="temp1.php">Account Login</a>
    </div>
  </div> 
 
     <a  href="gallery.php">Gallery</a>
  <a href="donate.php">Sponsors and Donors</a>
  <a  href="News.php">News & Event</a>
  <a class="active" href="contact.php">Contact Us</a>
    <a href="https://juniv.edu/" target="_blank">JU</a>

</div>
<div class="card"><marquee behavior="scroll" direction="right" scrollamount="5"><h1 style="text-align: center; color:red; ">Keep Contact And Keep Connected</h1></marquee><br>
  <div class="row">
  <div class="column2" style="background-color:#aaa;">
    
      <h4>Our Address</h4>
      Jahangirnagar University<br>
      Savar, Dhaka, <br>
      Bangladesh 1342<br><br>
  
 
      <h4>Contact Us</h4>
      Phone:+880-2-7791045<br>
      Fax: 880-2-7791052<br>
      <br><br>
      <b>MAP</b><br>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.1948529167253!2d90.26434781445838!3d23.882708239627096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755e9a21a90eb35%3A0xc0165221930f1369!2sJahangirnagar%20University%2C%20Savar%20Union!5e0!3m2!1sen!2sbd!4v1604050862474!5m2!1sen!2sbd" width="363%" height="58%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
  <div class="column" style="background-color:#aaa;">
  
  <form name="myForm" class="card1" action="contact3.php" method="post" onsubmit="return validateForm()">
  <div class="input-container">
  <label class="name">Your Full Name:<br></label>
  <input class="input-field" type="text" name="name" placeholder="Required" autocomplete="off" required><br>
  </div>

  <div class="input-container">
  <label class="email">Your Email:<br></b></label>
  <input class="input-field" type="email" name="email" placeholder="Required" autocomplete="off"><br>
  </div>

  <div class="input-container">
  <label class="name">Your Contact Number:<br></label>
  <input class="input-field" type="text" name="contact" placeholder="ex:01XXXXXXXXX" autocomplete="off"><br>
  </div>

  <div class="input-container">
  <label class="name">Subject:<br></label>
  <input class="input-field" type="text" name="subject" autocomplete="off"><br>
  </div>

  <div class="input-container">
  <label class="name">Your message:<br></label>
  <input class="input-field" type="text" name="message" placeholder="Empty message isn't allowed" autocomplete="off" required><br>
  </div>

  <p><input type="submit" value="Send Us" name="but_upload"> </p>

</form><br><br><br>
  </div>
</div></div>
</div><br><br>
</body>

<footer>
<div class="address">
  <h3>Jahangirnagar University Alumni Association</h3>
  <address>Register Building,Room No #131<br>Jahangirnagar University,Savar,Dhaka
       </address><br>
  <p>Contact Numbers:<br>(01876783515-520)</p>
<p >Gmail:alumni@juniv.edu</p> <p class="copyright " style="color: white" align="right" style="font-size: 2px">&copy;Copyright JUAA.2020:All rights reserved</p>

</footer>

</html>