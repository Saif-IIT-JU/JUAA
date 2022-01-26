<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
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

   	<div class="ful"><br><br>
   		<h3 style="text-align: center">Profile</h3>
<div class="info">
	<p><b>First Name  : </b>
	<?php

		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE status='yes' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["fname"];
		mysqli_close($conn);
	?>
	</p><br>

	<p><b>Last Name  : </b>
		<?php

		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE status='yes' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["lname"];
		mysqli_close($conn);
	?>
	</p><br>

	<p><b>User Name  :</b>
		<?php

		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE status='yes' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["uname"];
		mysqli_close($conn);
	?>
	</p><br>
	<p><b>Email  :</b>
		<?php

		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE status='yes' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["email"];
		mysqli_close($conn);
	?>
	</p><br>
	<p><b>Contact addres  :</b>
	<?php

		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE status='yes' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["address"];
		mysqli_close($conn);
	?> 
	</p><br>
	<p><b>Date of Birth  :</b>
	<?php

		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE status='yes' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["dob"];
		mysqli_close($conn);
	?> 
	</p><br>
	<p><b>Degree  :</b>
		<?php

		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE status='yes' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["degree"];
		mysqli_close($conn);
	?>
	</p><br>
	<p><b>Department/Institute  :</b>
		<?php

		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE status='yes' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["dept"];
		mysqli_close($conn);
	?>
	</p><br>
	<p><b>Registration Number  :</b>
	<?php

		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE status='yes' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["regnum"];
		mysqli_close($conn);
	?> 
	</p><br>
	<p><b>Session  :</b>
		<?php

		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE status='yes' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["session"];
		mysqli_close($conn);
	?>
	</p><br>
	<p><b>Graduation Year  :</b>
	<?php

		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE status='yes' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["yog"];
		mysqli_close($conn);
	?> 
	</p>
</div>

<div class="pic2">
<?php

	$conn = mysqli_connect('localhost', 'root', '', 'project');
	$q1 = "SELECT * from members where status='yes' ";
	$r1 = mysqli_query($conn, $q1);
	$row1 = mysqli_fetch_assoc($r1);
	$session = $row1["session"];
	$regnum = $row1["regnum"];
	$uname = $row1["uname"];
	$sql = "select * from images where session='".$session."' AND regnum='".$regnum."' ";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);

	$image = $row["img"];
	$image_src = 'photo/'.$image;
	//echo $row['img'];

	$q2 = "SELECT * from msgbox where recipient='".$uname."' AND status='no' ";
	$r2 = mysqli_query($conn, $q2);
	$cnt = mysqli_num_rows($r2);
	$cnt2 = "";
	if($cnt==1){ $cnt2 = (string)$cnt; $cnt2 .= " new message" ;}
	if($cnt>1){ $cnt2 = (string)$cnt; $cnt2 .= " new messages" ;}
	?>
	<img src='<?php echo $image_src;  ?>' style = "height: 200px; width: 190px;">

<form action="tmpchange.php" method="post">
<div class="photo-container">
    <input type="submit" value="ClickHere" name="submit"> <small>to change your photo</small>
            
</div>
</form>

<div class="button">
<button class="input-field"><a href="home.php" style="text-decoration: none; color: green;">GoHome</a></button>
<button class="input-field"><a href="EditAccountForm.php" style="text-decoration: none; color: green;"> Edit Profile</a></button><br>
<button class="input-field"><a href="handleevent.php" style="text-decoration: none; color: green;">Handle Events</a></button><br>
<button class="input-field"><a href="groupchat.php" style="text-decoration: none; color: green;">GoToGroupChat</a></button><br>
<button class="input-field"><a href="makepayment.php" style="text-decoration: none; color: green;">MakeMonthlyPayment</a></button>
<button class="input-field"><a href="DeleteAccount.php" style="text-decoration: none; color: green;">Delete Profile</a></button><br>
<button class="input-field"><a href="talks2.php" style="text-decoration: none; color: green;">ViewTalks</a></button>
<a style="color: red"><b style="font-size: 11px;"><?php echo $cnt2;  ?></b></a><br>
<button class="input-field"><a href="logout.php" style="text-decoration: none; color: green;">Log Out</a></button>
</div>

</div>

<h4 style="text-align: center; color: red">
	<?php

		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE status='yes' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		$session = $row["session"];
		$regnum = $row["regnum"];
		$email = $row["email"];
		$date = $row["memsince"];
		$password = $row["password"];
		$year = date("Y");
		$month = date("m");
		$year0 = date('Y', strtotime($date));
		$month0 = date('m', strtotime($date));
	//	echo $month0." ".$year0. "  ".$year. "<br>";

		$dur = 0;  $cnt = 0;
		if($year!=$year0) $dur = 5;
		else{
			$dur = (int)$month - (int)$month0;
		}
	//	echo $dur. "<br>";       

		$mn = min($dur, 5);

		$flag = 0;
		for($i=(int)$month-$mn; $i<=(int)$month; $i++){
		$mon = date("F", mktime(0, 0, 0, $i, 10)); 
		$nmon = date('m',strtotime($mon));

		$sql2 = "SELECT* FROM payment WHERE session='".$session."' AND regnum='".$regnum."' AND password='".$password."' AND month='".$nmon."' ";
		$res2 = mysqli_query($conn, $sql2);
		$n = mysqli_num_rows($res2);
		if($n==0){
			if($flag==0){
				echo "* You haven't made monthly payment for the month <b>".$mon . "</b>. Please make payment soon."; $flag = 1;
			}
			 
			$cnt++;
		}

	}
	//echo $cnt;
	if($cnt>3){
					$to = $email;
					$subj = "Reminder Message";
					$body = "Your membership is temporarily blocked. Please contact with authority within this month. Otherwise your membership will parmanently blocked after this month.";
					$header =  "This mail has been created automatically by JUAA WEBSITE";

					if(mail($to, $subj, $body, $header)){
					//echo "mailed success";
					}else{
						//echo "Mail failed";
					}
		header('location: http://localhost/SWE%20Project/SWE%20Project/cancellation.php'); return;
	}

		mysqli_close($conn);

	?>
</h4>
</div>

</body>
</html>