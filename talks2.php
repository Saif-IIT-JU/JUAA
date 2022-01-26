
<!DOCTYPE html>
<html>
<head>
	<title>TALKS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="profile1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <link rel="stylesheet" type="text/css" href="style2.css">
	<style type="text/css">

		.ful{
	border-style: solid;
	border-color: lightgrey;
	margin-left: 210px;
	margin-right: 210px;
	margin-top: 50px;
	margin-bottom: 50px;
}
.pic2{
    margin-left: 735px;
    margin-top: -450px;
}


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
</head>
<body style="background-color: ">

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

<?php

$conn = mysqli_connect('localhost', 'root', '', 'project');

echo "<br>";

if(!$conn){
	echo "<h2>Connection Failed</h2>";
}
else{
	$sql = "SELECT * FROM msgbox ";
	$res = mysqli_query($conn, $sql);
	$sql2 = "SELECT * FROM members Where status='yes' ";
	$res2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_assoc($res2);
	$uname = $row2["uname"];
	$session = $row2["session"];
	$regnum = $row2["regnum"];
	$tuname = $uname; $tuname .= "'s";

	$sql3 = "SELECT * FROM images Where session='".$session."' AND regnum='".$regnum."' ";
	$res3 = mysqli_query($conn, $sql3);
	$row3 = mysqli_fetch_assoc($res3);
	$pic = $row3["img"];

	$output = "";
	$output .= '
		<style>
						table, th, td {
  						border: 1px solid black;
  						border-collapse: collapse;
						}
						th, td {
  							padding: 15px;
 						    
						}

						.tmp{
							text-align: right; 
						}
						.tmp2{
							text-align: left; 
						}
						.tmp3 {
  							padding: 24px;
 						    
						}

						table.center {
 						 margin-left: auto; 
 						 margin-right: auto;
						}
		</style>
				 <table border="1px solid black" width=100% class="center">
					<tr>
					<td colspan=4 style="background-color: lightgrey;">
					'.$tuname.' talks
					</td>
					</tr>
					
				</table><br>
	';

  echo $output; echo "";
  $output = "";
	while($row=mysqli_fetch_assoc($res)){
		$authore = $row["authore"];
		$msg = $row["msg"];
		$recipient = $row["recipient"];
		$time = $row["time"];

		

    $sql6 = "UPDATE msgbox SET status = 'yes' Where recipient='".$uname."' ";
    $res6 = mysqli_query($conn, $sql6);

		if($authore==$uname || $recipient==$uname){
      $rpl=""; $apic=""; $rpic="";
      if($authore==$uname){
        $sql4 = "SELECT * FROM members Where uname='".$recipient."' ";
    $res4 = mysqli_query($conn, $sql4);
    $row4 = mysqli_fetch_assoc($res4);
    $ses2 = $row4["session"];
    $reg2 = $row4["regnum"];
    $sql5 = "SELECT * FROM images Where session='".$ses2."' AND regnum='".$reg2."' ";
    $res5 = mysqli_query($conn, $sql5);
    $row5 = mysqli_fetch_assoc($res5);
    $pic2 = $row5["img"];
      $rpl = $recipient; $apic = $pic; $rpic = $pic2; }
      else{

        $sql4 = "SELECT * FROM members Where uname='".$authore."' ";
    $res4 = mysqli_query($conn, $sql4);
    $row4 = mysqli_fetch_assoc($res4);
    $ses2 = $row4["session"];
    $reg2 = $row4["regnum"];
    $sql5 = "SELECT * FROM images Where session='".$ses2."' AND regnum='".$reg2."' ";
    $res5 = mysqli_query($conn, $sql5);
    $row5 = mysqli_fetch_assoc($res5);
    $pic2 = $row5["img"];

       $rpl = $authore; $apic = $pic2; $rpic = $pic; }

			$tmp = '

				<style>
						table, th, td {
  						border: 1px solid black;
  						border-collapse: collapse;
						}
						th, td {
  							padding: 15px;
 						    
						}

						.tmp{
							text-align: right; 
						}
						.tmp2{
							text-align: left; 
						}
						.tmp3 {
  							padding: 24px;
 						    
						}

						table.center {
 						 margin-left: auto; 
 						 margin-right: auto;
						}
						</style> <table border="1px solid black" width=100% class="center">
					<tr style="background-color: lightgrey;">
					<td class="tmp2">
          <h4>Authore</h4><br>
					<img src="photo/'.$apic.'" style = "height: 90px; width: 90px;"  class="img-thumbnail" /><br>
          <a href="tmprofile.php?param1='.$authore.' ">'.$authore.'</a><br>
					</td>
					<td>
          <h4>Recipient</h4><br>
					<img src="photo/'.$rpic.'" style = "height: 90px; width: 90px;"  class="img-thumbnail" /><br>
          <a href="tmprofile.php?param1='.$recipient.' ">'.$recipient.'</a><br>
					</td>
					<td class="tmp3">
          <h4>Message</h4><br>
          '.$msg.'<br>
					</td>
					<td>
  					'.$time.'<br>

  					<a href="SendMessage.php?param1='.$rpl.' ">reply</a>

  					</td>
  					</tr>
  					</table>
            <br>

			';

      $tmp .= $output;

      $output = $tmp;
		}
	}

	echo $output;
}

?>

</body>
</html>