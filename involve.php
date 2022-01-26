<!DOCTYPE html>
<html>
<head>
	<title>Involved</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">

	<style type="text/css">
	

.card{

  background-color: white;
  padding: 30px;
  padding-bottom: 50px; 
  margin-top: 20px;
  margin-left: 100px;
  margin-right: 100px;
}
.card1{

  background-color: white;
  padding: 30px;
  padding-bottom: 50px; 
  margin-top: 20px;
  
}
.card1 h3{
	text-align: center;
}
.card h2{
	text-align: center;
}
.card p{
	margin-left: 50px;
	margin-right: 50px;
}
form{
	        border-style: solid;
	        border-color: grey;
	        margin-top: 40px;
	        margin-left: 400px;
	        margin-right: 400px;	
	        padding-top: 20px;
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
          
.button {
  
border: none;
color: black;
background-color: #C2C6CA;
 padding: 10px 20px;
text-align: center;
text-decoration: none;
cursor: pointer;
 margin-left:500px;
margin-top: 50px;
 margin-bottom: 30px;
font-size: 15px;  
 }
            
.button:hover {
             opacity: 1;
              }


	</style>

<script type="text/javascript">
    function validateForm(){
      var x = document.forms["myForm"]["phone"].value;
      if(x==""){
        alert("Phone must be filled out"); return false;
      }
      var l = x.length;
      if(l<11){
        alert("Phone number is too sort"); return false;
      }
      if(l>11){
        alert("Phone Number is too large"); return false;
      }

      var s = x.slice(0,3);
      if(!(s=="017" || s=="019" || s=="015" || s=="013" || s=="011" || s=="016" || s=="018")){
        alert("Phone code is not valid"); return false;
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
  <a class="active" href="involve.php">Get Involved</a>
  <div class="dropdown">
    <button class="dropbtn">  <a  href="#">Membership</a>

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

<div class="card">
	<h2>Be Involved</h2>
	<p>Dear Member,<br><br>

JU Alumni is an organization with immense potential and possibilities. These will remain unreachable and unrealized without the support and participation of the alumni at large.  <br><br>  

We would welcome your active participation in the affairs of JU Alumni. If you are willing to contribute your talent and time to some of its activities, please let us know of your preferred area of interest.  You may write to us about how you could add value to the organization’s programs and activities. You may also indicate your interest in the lower part of this page by ticking the field(s) of your choice mentioned below. We will contact you as soon as possible.<br><br>

Thank you.<br><br>

Nicole Jain<br>
Secretary General</p>
</div>

<div class="card1">
	<h3>Fill The Form Below<br>(Optional)</h3>
  <form name="myForm" action="involve2.php" method="post" onsubmit="return validateForm()">
      <h3>PLEASE COMPLETE AND SEND</h3><br><br>


      <div class="input-container">
        <label class="fname">Full Name:</label>
        <input class="input-field" type="text" name="fname"  placeholder="*Required" autocomplete="off" required><br>
      </div>

    

    <div  class="input-container">
      <label>Mobile</label><br>
        <input class="input-field" type="text" name="phone" placeholder="*Required" autocomplete="off" ><br>
    </div>

    <div  class="input-container">
      <label>Email</label><br>
        <input class="input-field" type="Email" name="email" placeholder="*Required" autocomplete="off"><br>
    </div>

    <div >
    <h5>I wish to be involved as a volunteer in the following areas of JU Alumni activities.</h5><br><br><br>

            <label for="ca">Cultural activities:</label>
            <select class="input-field" type="text"  name="ca" id="dept">
            <option value="Select option">Select Option</option>
            <option value="As an artist">As an artist</option>
            <option value="In organizing events">In organizing events</option>
            </select><br><br><br>
    </div>

    <div >
    <label for="donor">Become a donor:</label>
            <select class="input-field" type="text"  name="donor" id="dept">
            <option value="Select option">Select Option</option>
            <option value="As a sponsor of student scholarship">As a sponsor of student scholarship</option>
            <option value="As a donor of fund for medical treatment">As a donor of fund for medical treatment</option>
            </select><br><br><br>
    </div>

    <div >
          <label for="ap">Annual Publications:</label>
            <select class="input-field" type="text"  name="ap" id="dept">
            <option value="Select option">Select Option</option>
            <option value="As writer in annual publication">As writer in annual publication</option>
            <option value="Member of editorial team ">Member of editorial team </option>
            </select><br><br><br>
    </div>
      
        <p style="text-align: center"></big><input type="submit" value="Send" name="but_upload"> </p>
  </form>
</div>
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