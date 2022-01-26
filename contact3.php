

<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
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
  margin-left: 100px;
  margin-right: 100px;
}
.card h2{
	text-align: center;
}

	</style>
	
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

<div >
<h2 style="text-align: center"><br><br><br><br><br>
	<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	if(empty($name) || empty($email) || empty($contact) || empty($message) ){
		echo "Name, Email, Contact Number Or message Can't Be Empty";
    //echo' <meta http-equiv="refresh" content="1; URL="temp1.php""/>'; 
     return ;
	}

  $cnt = 0;
  for($i = 0; $i<11; $i++){
    $c = $contact[$i];
    if($c >= '0' && $c <='9') $cnt++;
  }
  if($cnt!=11){
    echo "<h3>Contact Number Is Not Valid. Please Insert Valid Contact Number.</h3>"; return;
  }

	$conn = mysqli_connect('localhost', 'root', '', 'project');

	if(!$conn){
		die("Connection failed: ". $conn->connect_error);
	}

	else{
		// echo "Connect successfully<br>";
		$sql = "INSERT INTO messages(name, email, contact, subject, message) VALUES('".$name."', '".$email."', '".$contact."', '".$subject."', '".$message."' ) ";
		$res = mysqli_query($conn, $sql);

    	if($res){
    		echo "Thanks For Your Contact. We Have Got Your Messages.<br>";
    	}else{
    		echo "Failed Connection";
    	}

    	return;
	}

?>

</h2>

</div>
	
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