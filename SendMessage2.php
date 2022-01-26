<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$msg = $_POST['msg'];
$recipient = $_GET['param1'];
$conn = mysqli_connect('localhost', 'root', '', 'project');

if(!$conn){
	echo "<h2>Connection Failed</h2>";
}
else{
	$sql = "SELECT * FROM members WHERE status='yes' ";
	$res = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($res);
	$authore = $row["uname"];

	$d=time();
  	$tm = strtotime("+5 hours", $d);
  	$time = date("Y-m-d h:i:sa", $tm);
  	$status = "no";

	$sql2 = "INSERT INTO msgbox(authore, recipient, msg, time, status) VALUES('".$authore."', '".$recipient."', '".$msg."', '".$time."', '".$status."') ";
	$res2 = mysqli_query($conn, $sql2);

	header('location: http://localhost/SWE%20Project/SWE%20Project/talks.php?param1='.$recipient.' ');
}

?>

</body>
</html>