<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$msg = $_POST['msg'];
$recipient = $_GET['param1'];
$id = $_GET['param2'];
$conn = mysqli_connect('localhost', 'root', '', 'project');

if(!$conn){
	echo "<h2>Connection Failed</h2>";
}
else{
	$sql = "SELECT * FROM members WHERE status='yes' ";
	$res = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($res);
	$authore = $row["fname"]; $authore.=' '; $authore.=$row["lname"];

	$sql2 = "SELECT * FROM members WHERE uname='".$recipient."' ";
	$res2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_assoc($res2);

	$to = $row2["email"];
//	echo $to;

	$subj = "Event Reminder";
	$body = $msg;
/*	$body .= $row2["fname"]; $body .= " "; $body .= $row2["lname"]; $body .= ", ";
	$body .= "An event is going to be held on "; $body .= $date; $body .= " at "; $body .= $time; $body .=" to "; $body .= $etime; $body.=". But you haven't registerd yet. Please register soon."; */

	$header = "This mail has been created automatically by JUAA WEBSITE";

	if(mail($to, $subj, $body, $header)){
		$out=""; $out.='
        <script type="text/javascript">
        alert("Mail Sent Successfully!");
        </script>
      ';
      echo $out;
	}else{
		$out=""; $out.='
        <script type="text/javascript">
        alert("Failed to send Mail. Try again.");
        </script>
      ';
      echo $out;
	}
}

?>

<meta http-equiv="refresh" content='0; URL="remind.php?param1=<?php echo $id ?>'/>

</body>
</html>