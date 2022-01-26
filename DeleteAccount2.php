<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: lightgrey; text-align: center"><br><br><br><br>

<?php
//echo "deletion in processing";
$session = $_POST['session'];
$regnum = $_POST['reg'];
$password = $_POST['password'];

$conn = mysqli_connect('localhost', 'root', '', 'project');

if(!$conn){
	echo "Connection Failed. Try Again";
}else{
	$q0 = "SELECT * FROM members WHERE session='".$session."' AND regnum='".$regnum."' AND password='".$password."' AND status='yes' ";
	$r0 = mysqli_query($conn, $q0);
	$nrows = mysqli_num_rows($r0);
	if($nrows!=1){
		echo "<br><br><br><h2>Insert Your Session, Registration Number and Password Correctly.</h2><br>";
		return;
	}
	$q1 = "DELETE from images WHERE session='".$session."' AND regnum='".$regnum."' ";
	$r1 = mysqli_query($conn, $q1);
	$q2 = "DELETE from events WHERE host_session='".$session."' AND host_reg='".$regnum."' ";
	$r2 = mysqli_query($conn, $q2);
	$q3 = "DELETE from members WHERE session='".$session."' AND regnum='".$regnum."' ";
	$r3 = mysqli_query($conn, $q3);

	if($r1 && $r2 && $r3){
		echo "<h2>Your Membership Has Been Cancelled</h2>";
	}else{
		echo "<h2>Failed AND Try Again.</h2>";
	}
}

?>

<meta http-equiv="refresh" content="4; URL='home.php'"/> 


</body>
</html>