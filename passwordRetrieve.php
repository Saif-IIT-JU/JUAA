<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>password retrieve</title>
	<meta http-equiv = "refresh" content = "3; url = myaccount.php" />
</head>
<body style="text-align: center; background-color: lightgrey"><br><br><br><br>

<?php

	$email = $_POST['email'];

	$conn = mysqli_connect("localhost", "root", "", "project");

	if(!$conn){
		echo "<h2>Connection Failed</h2>";
	}else{
		//echo "connection success<br>";
		$q1 = "SELECT * from members WHERE email = '".$email."' ";
		$r1 = mysqli_query($conn, $q1);

		if(mysqli_num_rows($r1)!=1){
			echo "<h1>Email Not Found</h1>";
		}else{
			$row = mysqli_fetch_assoc($r1);
			$pass = $row["password"];

			$to = $email;
			$subj = "Show Password";
			$body = "Your JUAA membership password is :  "; $body .= $pass;
			$header = "This mail has been created automatically by JUAA WEBSITE";

			if(mail($to, $subj, $body, $header)){
				echo "<h2>Your password has been sent to your email. Please check your email inbox.</h2>";
			}else{
				echo "Mail failed";
			}
		}
	}

?>

</body>
</html>