<!DOCTYPE html>
<html>
<head>
  <title>Invitation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <link rel="stylesheet" type="text/css" href="style.css">

  <style type="text/css">




form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

.title
{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}
.title p{
  text-align: center;
  font-family: cursive;
  color: white;
  
  font-size: 40px;

}
.logo1{
  width: 80px;
  margin-left:300px;
}
.card{

  background-color: white;
  padding: 30px;
  padding-bottom: 50px; 
}

.card h3{
  margin-top: -80px;
  font-size: 30px;
  text-align: center;
}


.chair{
  width: 250px;
  margin-left: 50px;
}
.message h2{
  text-align: center;
  padding-top: 20px;

}
.message p{
  text-align: left;
  font-size: 18px;
  margin-left: 320px;
  margin-right: 100px;
  margin-top: -170px;
}

.card1{
  background-color:  white;
  padding: 30px; 
  margin-top: 100px;

}
.card1 img{

  margin-left: 100px;
  margin-top: 60px;
  max-width: 270px;
}
.card1 h2{
  margin-top: 50px;
text-align: center;
margin-bottom: 50px;
}
.card1 h4{
  text-align: center;
  margin-top: 10px;
  color: #30741F;
  font-size: 20px;
}
.card1 p{
  text-align: left;
  margin-top: -120px;
  padding-bottom: 100px;
  margin-left: 500px;
  margin-right: 50px;
}


.event{
  text-align: center;
  padding-bottom: 50px;
  padding-top: 50px;

}

.btn {
  font-size: 28px;
  border:1px white;
  
  color: #30741F;
  transition:0.6s ease;
}
.btn:hover{
  background-color: #34552C;
  color:white;
}
.topnav .login-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav .login-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background-color: green;
}

@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

.mySlides {display:none;}
  .column {
  float: left;
  width: 30%;
  padding: 5px 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 50px;
  }
}

.card2 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  margin-left: 100px;
  text-align: left;
}
.nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    margin-left: 100px;
    list-style: none;
    color: white;
}
.nav-link {
  background-color: gray;
  text-decoration: none;
  padding: 20px;
  color: white;

}
a{
  text-decoration: none;
}
</style>
<script type="text/javascript">
  function PrintContent(conts){
    var printcontents = document.getElementById(conts).innerHTML;
    var origin = document.body.innerHTML;

    document.body.innerHTML = printcontents;
  //  alert(printcontents);
    window.print();

    document.body.innerHTML = origin;
  }
</script>
</head>
<body>

	 <div class="topnav">


  <a class="active" href="home.php">Home</a>
<div class="dropdown">
    <button class="dropbtn"><a href="#"> About Us </a>
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
<br><br>

<h2 style="text-align: center">Eligible members who have not registered yet</h2><br><br>

	<?php

		$id = $_GET['param1'];

		$conn = mysqli_connect('localhost', 'root', '', 'project');

		if(!$conn){
			echo "<h2 style='text-align:center'> Connection Failed. Try Again.</h2>";
		}else{
			$sql0 = "SELECT * FROM events WHERE id='".$id."' ";
			$res0 = mysqli_query($conn, $sql0);
			$row0 = mysqli_fetch_assoc($res0);
			$session = $row0["host_session"];
			$regnum = $row0["host_reg"];
			$dept = $row0["dept"];
			$batch = $row0["batch"];
			$date = $row0["date"];
			$time = $row0["time"];
			$etime = $row0["etime"];

			$sql1 = "SELECT * FROM members WHERE status='yes' ";
			$res1 = mysqli_query($conn, $sql1);
			$row1 = mysqli_fetch_assoc($res1);
			$asession = $row1["session"];
			$aregnum = $row1["regnum"];

			if($session==$asession && $regnum==$aregnum){

				$sql2 = "SELECT * FROM members ";
				$res2 = mysqli_query($conn, $sql2);
				while($row2 = mysqli_fetch_assoc($res2)){
				$name = $row2["fname"]; $name.=' '; $name.=$row2["lname"];
				$email = $row2["email"];
				$uname = $row2["uname"];
				$tdept = $row2["dept"];
     			$sesion = $row2["session"];
     			$regn = $row2["regnum"];
      			$ses = ""; $ses .= $sesion[0]; $ses .= $sesion[1]; $ses .= $sesion[2]; $ses .= $sesion[3];
      			$ses2 = (int)$ses;
      			$tbatch = 46 - (2016 - $ses2) ;
      			$tt = $tbatch; $tbatch = (string)$tt;

      			$flag = 1;

      			if($batch!="none" && $dept!="none"){
        			if($tbatch==$batch && $tdept==$dept) ;
        			else $flag = 0;
      			}
      			else if($batch!="none"){
        			if($tbatch!=$batch) $flag = 0;
      			}
      			else if($dept!="none"){
        			if($tdept!=$dept) $flag = 0;
      			}

      			$sql3 = "SELECT * FROM eventregistrants WHERE event_id='".$id."' AND uname='".$uname."' ";
				$res3 = mysqli_query($conn, $sql3);
			//	echo mysqli_num_rows($res3). " ". $flag. " ". $uname. "<br>";

      			if($flag==1 && mysqli_num_rows($res3)==0){
      			//	echo $uname. "<br>";

      				$sql4 = "SELECT * FROM images WHERE session ='".$sesion."' AND regnum='".$regn."' ";
					$res4 = mysqli_query($conn, $sql4);
					$row4 = mysqli_fetch_assoc($res4);

					$output = '';
					$output .= '<style>
						table, th, td {
  						border: 1px solid black;
  						border-collapse: collapse;
						}
						th, td {
  							padding: 20px;
 						    
						}

						.tmp{
							text-align: right; 
						}
						.tmp2{
							text-align: left; 
						}

						table.center {
 						 margin-left: auto; 
 						 margin-right: auto;
						}
						</style> <table border="1px solid black" width=40% class="center"><tr>
					<td class="tmp2">
					Name : '.$name.'<br>
					Dept : '.$tdept.'<br>
					Batch : '.$tbatch.'<br>
					</td>
					<td class="tmp">
  					<img src="photo/'.$row4["img"].'" style = "height: 90px; width: 90px;"  class="img-thumbnail" /><br>

  					<a href="sendMail.php?param1='.$uname.' & param2='.$id.' ">Send Mail</a>

  					</td>
  					</tr>
  					</table>';

					echo $output; echo "<br>";

      			/*	$to = $email;

					$subj = "Event Reminder";
					$body = "Hey ";
					$body .= $row2["fname"]; $body .= " "; $body .= $row2["lname"]; $body .= ", ";
					$body .= "An event is going to be held on "; $body .= $date; $body .= " at "; $body .= $time; $body .=" to "; $body .= $etime; $body.=". But you haven't registerd yet. Please register soon.";

					$header = "This mail has been created automatically by JUAA WEBSITE";

					if(mail($to, $subj, $body, $header)){
						//echo "Mailed Successfully";
					}else{
						//echo "mail failed";
					} */
      			}

      			
      		  }

      		  $output="";
      		  $output.='
  					<br><br>
  					<a href="sendMailAll.php?param1='.$id.' "><h3 style="text-align:center">Send Mail To All</h3</a>
  					<br><br><br>
  					' ;
  			  echo $output;
      		  return;
			}else{
				
				echo '<script> alert("You are not host of this event.")</script>';
			}
		}

	?>

	<meta http-equiv="refresh" content='0; URL="ShowEvents.php'/>

</body>
</html>