<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Account</title>
</head>
<body style="background-color: lightgrey; text-align: center"><br><br><br><br>
<?php

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$degree = $_POST['degree'];
	
	$dob = $_POST['dob'];
	$address = $_POST['address'];
	$session = $_POST['session'];
	$regnum = $_POST['regnum'];
	$password = $_POST['password'];

	if(empty($session) || empty($regnum) || empty($password) ){
		echo "<h2>Session, Registration Number Or Password Can't Be Empty</h2>"; return ;
	}

	$conn = mysqli_connect('localhost', 'root', '', 'project');

	if(!$conn){
		die("Connection failed: ". $conn->connect_error);
	}

	else{
		// echo "Connect successfully<br>";
		$sql = "SELECT * FROM members WHERE session='".$session."' AND regnum='".$regnum."' AND password = '".$password."' AND status='yes' "; 
		$res = mysqli_query($conn, $sql);

    	$numrows=mysqli_num_rows($res); 
		if($numrows==0){
			echo "<h2>This Registration Number or Session or Password is not Correct. Please Insert Valid Information.</h2><br>";
		}else{
			{
				//echo "DONE<br>";
				//echo  "Hello ". $fname . "";

				if(empty($fname)==FALSE){
					$q1 = "UPDATE members SET fname = '".$fname."' WHERE session = '".$session."' AND regnum = '".$regnum."' ";
					$r1 = mysqli_query($conn, $q1);
				}
				if(empty($lname)==FALSE){
					$q1 = "UPDATE members SET lname = '".$lname."' WHERE session = '".$session."' AND regnum = '".$regnum."' ";
					$r1 = mysqli_query($conn, $q1);
				}
				if($degree=="BSc" || $degree=="Msc"){
					$q1 = "UPDATE members SET degree = '".$degree."' WHERE session = '".$session."' AND regnum = '".$regnum."' ";
					$r1 = mysqli_query($conn, $q1);
				}
				
				if(empty($dob)==FALSE){
					$q1 = "UPDATE members SET dob = '".$dob."' WHERE session = '".$session."' AND regnum = '".$regnum."' ";
					$r1 = mysqli_query($conn, $q1);
				}
				if(empty($address)==FALSE){
					$q1 = "UPDATE members SET address = '".$address."' WHERE session = '".$session."' AND regnum = '".$regnum."' ";
					$r1 = mysqli_query($conn, $q1);
				}

				echo "DATA UPDATED";
				header('location: http://localhost/SWE%20Project/SWE%20Project/profile2.php');

			}
		}
	}

?>

</body>
</html>