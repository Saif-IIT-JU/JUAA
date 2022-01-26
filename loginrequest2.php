<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="profile1.css">
</head>
<body style="background-color: ">
	<?php

		$email = $_POST['email'];
		$password = $_POST['password'];

		if(empty($email) || empty($password)){
			echo "<h1>Email or Password Cant't be empty.</h1>";
			return ;
		}

		$conn = mysqli_connect('localhost', 'root', '', 'project');
		if(!$conn){
			echo "Connection Failed!!";
		}
		else{

			$sql = "SELECT* FROM members WHERE email='".$email."' AND password='".$password."' ";
			$res = mysqli_query($conn, $sql);
			$nums = mysqli_num_rows($res);
			if($nums==0){
				echo "<h1>Wrong Email or Password. Try Again</h1><br>";
				return ;
			}else{
				//echo "<h3> Successfully Logged IN!</h3><br><br>";
				mysqli_close($conn);
			}
		}
	?>

   	<div class="full">
   		<h3 style="text-align: center">Profile</h3>
<div class="info">
	<p><b>First Name  : </b>
	<?php

		$email = $_POST['email'];
		$password = $_POST['password'];
		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE email='".$email."' AND password='".$password."' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["fname"];

		$sql = "UPDATE members SET status='yes' WHERE email='".$email."' AND password='".$password."' ";
		$res = mysqli_query($conn, $sql);

		mysqli_close($conn);
	?>
	</p>

	<p><b>Last Name  : </b>
		<?php

		$email = $_POST['email'];
		$password = $_POST['password'];
		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE email='".$email."' AND password='".$password."' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["lname"];
		mysqli_close($conn);
	?>
	</p>

	<p><b>User Name  :</b>
		<?php

		$email = $_POST['email'];
		$password = $_POST['password'];
		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE email='".$email."' AND password='".$password."' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["uname"];
		mysqli_close($conn);
	?>
	</p>
	<p><b>Email  :</b>
		<?php

		$email = $_POST['email'];
		$password = $_POST['password'];
		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE email='".$email."' AND password='".$password."' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["email"];
		mysqli_close($conn);
	?>
	</p>
	<p><b>Contact addres  :</b>
	<?php

		$email = $_POST['email'];
		$password = $_POST['password'];
		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE email='".$email."' AND password='".$password."' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["address"];
		mysqli_close($conn);
	?> 
	</p>
	<p><b>Date of Birth  :</b>
	<?php

		$email = $_POST['email'];
		$password = $_POST['password'];
		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE email='".$email."' AND password='".$password."' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["dob"];
		mysqli_close($conn);
	?> 
	</p>
	<p><b>Degree  :</b>
		<?php

		$email = $_POST['email'];
		$password = $_POST['password'];
		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE email='".$email."' AND password='".$password."' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["degree"];
		mysqli_close($conn);
	?>
	</p>
	<p><b>Department/Institute  :</b>
		<?php

		$email = $_POST['email'];
		$password = $_POST['password'];
		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE email='".$email."' AND password='".$password."' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["dept"];
		mysqli_close($conn);
	?>
	</p>
	<p><b>Registration Number  :</b>
	<?php

		$email = $_POST['email'];
		$password = $_POST['password'];
		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE email='".$email."' AND password='".$password."' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["regnum"];
		mysqli_close($conn);
	?> 
	</p>
	<p><b>Session  :</b>
		<?php

		$email = $_POST['email'];
		$password = $_POST['password'];
		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE email='".$email."' AND password='".$password."' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["session"];
		mysqli_close($conn);
	?>
	</p>
	<p><b>Graduation Year  :</b>
	<?php

		$email = $_POST['email'];
		$password = $_POST['password'];
		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$sql = "SELECT* FROM members WHERE email='".$email."' AND password='".$password."' ";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		echo $row["yog"];
		mysqli_close($conn);
	?> 
	</p>
</div>

<div class="pic">
<?php

	$conn = mysqli_connect('localhost', 'root', '', 'project');
	$q1 = "SELECT * from members where email='".$email."' AND password='".$password."' ";
	$r1 = mysqli_query($conn, $q1);
	$row1 = mysqli_fetch_assoc($r1);
	$session = $row1["session"];
	$regnum = $row1["regnum"];
	$sql = "select * from images where session='".$session."' AND regnum='".$regnum."' ";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);

	$image = $row["img"];
	$image_src = 'photo/'.$image;
	//echo $row['img'];
	?>
	<img src='<?php echo $image_src;  ?>' style = "height: 200px; width: 190px;">

<form action="tmpchange.php" method="post">
<div class="photo-container">
    <input type="submit" value="ClickHere" name="submit"> <small>to change your photo</small>
            
</div>
</form>

<div class="button">
<button class="input-field"><a href="home.php" style="text-decoration: none; color: green;">GoHome</button>
<button class="input-field"><a href="EditAccountForm.php" style="text-decoration: none; color: green;"> Edit Profile</button></a><br>
<button class="input-field"><a href="handleevent.php" style="text-decoration: none; color: green;">Handle Events</button></a><br>
<button class="input-field"><a href="groupchat.php" style="text-decoration: none; color: green;">GoToGroupChat</button></a><br>
<button class="input-field"><a href="makepayment.php" style="text-decoration: none; color: green;">MakeMonthlyPayment</button>
<button class="input-field"><a href="DeleteAccount.php" style="text-decoration: none; color: green;">Delete Profile</button><br>
<button class="input-field"><a href="logout.php" style="text-decoration: none; color: green;">Log Out</button>
</div>

</div>
<p style="text-align: center; color: red">
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
	if($cnt>4){
		$q0 = "SELECT * FROM members WHERE email='".$email."' AND password='".$password."' ";
	$r0 = mysqli_query($conn, $q0);
	$nrows = mysqli_num_rows($r0);
	if($nrows!=1){
		return;
	}

	$row = mysqli_fetch_assoc($r0);
	$session = $row["session"];
	$regnum = $row["regnum"];
	$q1 = "DELETE from images WHERE session='".$session."' AND regnum='".$regnum."' ";
	$r1 = mysqli_query($conn, $q1);
	$q2 = "DELETE from events WHERE host_session='".$session."' AND host_reg='".$regnum."' ";
	$r2 = mysqli_query($conn, $q2);
	$q3 = "DELETE from members WHERE session='".$session."' AND regnum='".$regnum."' ";
	$r3 = mysqli_query($conn, $q3);
	header('location: http://localhost/SWE%20Project/SWE%20Project/ParmanentCancellation.php'); return;
	}
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

	header('location: http://localhost/SWE%20Project/SWE%20Project/cancellation.php');



		mysqli_close($conn);

	?>
</p>
</div>

</body>
</html>