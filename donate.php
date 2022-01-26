<!DOCTYPE html>
<html>
<head>
	<title>Donors</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		
         form{
	        border-style: solid;
	        border-color: grey;
	        margin-top: 40px;
	        margin-left: 300px;
	        margin-right: 300px;	
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
.card1{

  background-color: white;
  padding: 30px;
  padding-bottom: 50px; 
  margin-top: 20px;
  margin-left: 100px;
  margin-right: 100px;
}
.card h2,h3{
	text-align: center;
}
form{
	        border-style: solid;
	        border-color: grey;
	        margin-top: 40px;
	        
	        
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
            width:80%;
            padding: 10px;
            background:#EEEAE9;
            outline: none;
            border: 1px transparent;
            margin-left: 60px;

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

      var xx = x.toString();
      var s = xx.slice(0,3);
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
 
     <a href="gallery.php">Gallery</a>
  <a class="active" href="donate.php">Sponsors and Donors</a>
  <a href="News.php">News & Event</a>
  <a href="contact.php">Contact Us</a>
    <a href="https://juniv.edu/" target="_blank">JU</a>

</div>

<div class="card1">
<h3>Want to Donate? Fill the form below</h3>
  <form name="myForm" action="donate2.php" method="post" onsubmit="return validateForm()">
	    

	    <div class="input-container">
	    	<label class="fname">Full Name:</label><br><br>
		    <input class="input-field" type="text" name="name"  autocomplete="off" required><br>
	    </div>
	    <div class="input-container">
			<label>Mobile No:</label><br><br>
		    <input class="input-field" type="text" name="phone" class="phone" autocomplete="off"><br>
		</div>
		

		<div class="input-container">
			<label>Email:</label><br>
		    <input class="input-field" type="Email" name="email" class="email" autocomplete="off"><br>
		</div>

		<div >
			<label>JU Graduate?</label><br>
		    <input type="radio" id="yes" name="grad" value="yes">
            <label for="yes">Yes</label><br>
            <input type="radio" id="no" name="grad" value="no">
            <label for="no">No</label><br><br>
		</div>

	<div class="input-container">
			<label for="degree">Degree:</label><br>
            <select class="input-field" name="degree" id="degree"><br>
            <option value="Select Degree">Select Degree</option>
            <option value="BSc">BSc</option>
            <option value="Msc">Msc</option>
            </select><br>
		</div>

		<div class="input-container">
			<label for="dept">Department/Institute:</label><br>
            <select class="input-field"  name="dept" id="dept">
            <option value="Select Department">Select Department/Institute</option>
            <option value="Department of English">Department of English</option>
            <option value="Department of Chemistry">Department of Chemistry</option>
            <option value="Department of Bangla">Department of Bangla</option>
            <option value="Department of Zoology">Department of Zoology</option>
            <option value="Department of Biology">Department of Biology</option>
            <option value="Department of Mathematics">Department of Mathematics</option>
            <option value="Department of Anthropology">Department of Anthropology</option>
            <option value="Institute of Information Technology">Institute of Information Technology</option>
            <option value="Institute of Business Administration">Institute of Business Administration</option>
            </select><br>
		</div>


		<div class="input-container">
			<label>Organization(If relevant)</label>
         <br>   <input class="input-field" type="text" name="org"><br>

		</div>





		<div class="input-container">
			<label>Present Position(If relevant)</label><br>
            <input class="input-field" type="text" name="position"><br>
		</div>

		<div class="input-container">
			<label>Purpose Of Donation</label>
            <input class="input-field" type="text" name="purpose"><br>
		</div>

		<div class="input-container">
			<label>Payment Amount</label>
            <input class="input-field" type="text" name="amount"><br>
		</div>

       
		<div class="input-container">
        <p>Pay via ----- and put the transaction number below.</p>
            <label>Transaction Number:</label>
            <input class="input-field" type="text" name="transaction" placeholder="*Required">
    </div>
      
 <p style="text-align: center"></big><input type="submit" value="Donate" name="but_upload"> </p>
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