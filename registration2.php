<html>
<head>
	<title>RegistrationInProcess</title>
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
  <a href="News.php">News/Notice</a>
  <a href="contact.php">Contact Us</a>
    <a href="https://juniv.edu/" target="_blank">JU</a>

</div>
<body style="background-color: lightgrey; text-align: center; height: =100%"><br><br><br><br>
<div>
<?php

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$uname = $_POST['uname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$yog = $_POST['yog'];
	$degree = $_POST['degree'];
	$dept = $_POST['dept'];
	$regnum = $_POST['regnum'];
	$session = $_POST['session'];
	$transaction = $_POST['transaction'];
	$amnt = "2000";

	$l = strlen($password);
	if($l<8 || $l>30){
		echo "<h2>Password's Length Must Be Between 8 to 30.</h2>"; return;
	}
	$up = 0; $lo = 0; $nm = 0;
	for($i=0; $i<$l; $i++){
		$c = $password[$i];
		if($c>='0' && $c<='9') $nm++;
		else if($c>='A' && $c<='Z') $up++;
		else if($c>='a' && $c<='z') $lo++;
	}

	if($up==0 || $lo==0 || $nm==0){
		echo "<h2>Password Must Contain Atleast A Number, An Uppercase Character And A Lowercase Character.</h2>"; return;
	}

	if(empty($email)){
		echo "<h2>Email Must be Filled Out</h2>"; return;
	}
	if(empty($fname) || empty($lname) || empty($uname) ){
		echo "<h2>FisrtName, LastName Or UserName Can't Be Empty</h2>"; return ;
	}

	$conn = mysqli_connect('localhost', 'root', '', 'project');

	if(!$conn){
		die("Connection failed: ". $conn->connect_error);
	}

	else{
		// echo "Connect successfully<br>";
		$sql = "SELECT * FROM students WHERE session='".$session."' AND regnum='".$regnum."' "; 
		$res = mysqli_query($conn, $sql);
    	$numrows=mysqli_num_rows($res); 
		if($numrows==0){
			echo "<h2>This Registration Number is not valid. Please Insert Valid Registration Number.</h2><br>"; return;
		}else{
			$sql2 = "SELECT * FROM members WHERE session='".$session."' AND regnum='".$regnum."' ";
			$res2 = mysqli_query($conn, $sql2);
			$numrows2 = mysqli_num_rows($res2);

			$sql4 = "SELECT * FROM transactions WHERE Transaction_no = '".$transaction."' AND amount = '".$amnt."' ";
			$res4 = mysqli_query($conn, $sql4);
			$numrows4 = mysqli_num_rows($res4);
			$sql5 = "SELECT * FROM members WHERE email = '".$email."' ";
			$res5 = mysqli_query($conn, $sql5);
			$numrows5 = mysqli_num_rows($res5);
			$sql6 = "SELECT * FROM members WHERE uname = '".$uname."' ";
			$res6 = mysqli_query($conn, $sql6);
			$numrows6 = mysqli_num_rows($res6);

			if($numrows2!=0){
				echo "<h2>This Registraton Number Is Already Taken! Try Again Please.</h2>"; return;
			} elseif($numrows4==0){
				echo "<h2> Probbaly You Didn't Make Payment! Transaction Number Is Invalid!</h2>"; return;
			} elseif($numrows5!=0){
				echo "<h2>This Email Has Already Been Taken.</h2>"; return;
			} elseif($numrows6!=0){
				echo "<h2>This User Name Has Already Been Taken.</h2>"; return;
			}
			else{
				//echo "DONE<br>";
				//echo  "Hello ". $fname . "";

				$name = $_FILES["file"]["name"];

  				$target_dir = "photo/";
  				$target_file = $target_dir . basename($_FILES["file"]["name"]);

  				// Select file type
  				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  				// Valid file extensions
  				$extensions_arr = array("jpg","jpeg","png","gif");

 	 			// Check extension
  				if( in_array($imageFileType,$extensions_arr) ){

  				$date = date('Y-m-d');


				$sql3 = "INSERT INTO members(fname, lname, uname, email, password, gender, yog, degree, dept, regnum, session, certificate_photo, memsince) VALUES('".$fname."', '".$lname."', '".$uname."', '".$email."', '".$password."', '".$gender."', '".$yog."', '".$degree."', '".$dept."', '".$regnum."', '".$session."', '".$name."', '".$date."') ";

				move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
				$blank = "";
				if($gender[0]=='m' || $gender[0]=='M') $blank = "blankMale.png";
				else  $blank = "blankFemale.jpg";


				$sql4 = "INSERT INTO images(session, regnum, img) VALUES('".$session."', '".$regnum."', '".$blank."') ";

				if(mysqli_query($conn, $sql3) && mysqli_query($conn, $sql4)){
					echo "<h2> You Are Registered Successfully.!!!</h2>";
					$to = $email;
					$subj = "Confirmation Message";
					$body = "Your registration has been confirmed. Now you are a member of Jahangirnagr University Alumni Association.";
					$header =  "This mail has been created automatically by JUAA WEBSITE";

					if(mail($to, $subj, $body, $header)){
					//echo "mailed success";
					}else{
						//echo "Mail failed";
					}

					$rr = mysqli_fetch_assoc($res4);
					$amount = $rr["amount"];
					$q = "DELETE FROM transactions WHERE Transaction_no='".$transaction."' ";
					$r = mysqli_query($conn, $q);
					$q = "INSERT INTO usedtransaction (Transaction_no, amount) VALUES('".$transaction."', '".$amount."') ";
					$r = mysqli_query($conn, $q);

				}else{
					$dsql = "DELETE FROM members WHERE session='".$session."' AND regnum='".$regnum."' ";
					$dres = mysqli_query($conn, $dsql);
					$dsql = "DELETE FROM images WHERE session='".$session."' AND regnum='".$regnum."' ";
					$dres = mysqli_query($conn, $dsql);
					echo "<h2> Failed To Register. Please Try Again </h2>"; return;
				}
			}
		}
	}
}

?>

</div>

<meta http-equiv="refresh" content="7; URL='temp1.php'"/> 

</body>
</html>