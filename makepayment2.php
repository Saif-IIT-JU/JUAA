<html>
<head>
	<title>Make Payment</title>
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

	$transaction = $_POST['transaction'];
	$session = $_POST['session'];
	$regnum = $_POST['regnum'];
	$password = $_POST['password'];
	$amnt = "500";

	$conn = mysqli_connect('localhost', 'root', '', 'project');

	if(!$conn){
		die("Connection failed: ". $conn->connect_error);
	}

	else{
		// echo "Connect successfully<br>";
		$sql = "SELECT * FROM members WHERE session='".$session."' AND regnum='".$regnum."' AND password='".$password."' AND status='yes' "; 
		$res = mysqli_query($conn, $sql);
    	$numrows=mysqli_num_rows($res); 
		if($numrows==0){
			echo "<h2>This Registration Number is not valid. Please Insert Valid Registration Number.</h2><br>"; return;
		}else{

			$sql4 = "SELECT * FROM transactions WHERE Transaction_no = '".$transaction."' AND amount = '".$amnt."' ";
			$res4 = mysqli_query($conn, $sql4);
			$numrows4 = mysqli_num_rows($res4);

			if($numrows4==0){
				echo "<h2> Probbaly You Didn't Make Payment! Transaction Number Against Given Amount Is Invalid!</h2>"; return;
			}
			else{
				//echo "DONE<br>";
				//echo  "Hello ". $fname . "";


		$sql5 = "SELECT* FROM members WHERE status='yes' ";
		$res5 = mysqli_query($conn, $sql5);
		$row5 = mysqli_fetch_assoc($res5);
		$date = $row5["memsince"];
		$year = date("Y");
		$month = date("m");
		$year0 = date('Y', strtotime($date));
		$month0 = date('m', strtotime($date));
	//	echo $month0." ".$year0. "  ".$year. "<br>";

		$dur = 0;
		if($year!=$year0) $dur = 2;
		else{
			$dur = (int)$month - (int)$month0;
		}
	//	echo $dur. "<br>";       

		$mn = min($dur, 2);

		$mon100;
		for($i=(int)$month-$mn; $i<=(int)$month; $i++){
		$mon = date("F", mktime(0, 0, 0, $i, 10)); 
		$nmon = date('m',strtotime($mon));

		$sql2 = "SELECT* FROM payment WHERE session='".$session."' AND regnum='".$regnum."' AND password='".$password."' AND month='".$nmon."' ";
		$res2 = mysqli_query($conn, $sql2);
		$n = mysqli_num_rows($res2);
		if($n==0){
			$mon100 = $nmon; break;
			 
		}

	}


				$sql3 = "INSERT INTO payment(session, regnum, password, month) VALUES('".$session."', '".$regnum."', '".$password."', '".$mon100."') ";
				if(mysqli_query($conn, $sql3)){
					$montmp = date("F", mktime(0, 0, 0, $mon100, 10)); 
					echo "<h2> You Have Made Payment Successfully For The Month ( ".$montmp. " ) .!!!</h2>";
					
					$rr = mysqli_fetch_assoc($res4);
					$amount = $rr["amount"];
					$q = "DELETE FROM transactions WHERE Transaction_no='".$transaction."' ";
					$r = mysqli_query($conn, $q);
					$q = "INSERT INTO usedtransaction (Transaction_no, amount) VALUES('".$transaction."', '".$amount."') ";
					$r = mysqli_query($conn, $q);

				}else{
					echo "<h2> Failed To Make Payment. Please Try Again </h2>"; return;
				}
		}
	}
}

?>

</div>

<meta http-equiv="refresh" content="10; URL='profile2.php'"/> 

</body>
</html>