<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: lightgrey">

<?php
	
	echo "<br><br><br><h2 style='text-align:center; color:red'>Your Membership Has Been Temporarily Cancelled Due To More Than 3 Monthly Payment.</h2>";
	echo "<br><h2 style='text-align:center; color:red'>Please Contact With The JUAA Authority Within <b>This Month</b> To Retrieve Your Account. Otherwise Your Membership Will Be Parmanently Cancelled After This Month.</h2>";


	$conn = mysqli_connect('localhost', 'root', '', 'project');

	if(!$conn){
		die("Connection failed: ". $conn->connect_error);
	}

	else{
		// echo "Connect successfully<br>";
    	$v = "yes";
    	$v2 = "no";
		$sql = "UPDATE members SET status='".$v2."' WHERE status = '".$v."' ";
		$res = mysqli_query($conn, $sql);

    	if($res){
        	
    	}
      else{
      	echo "Connection Failed. Try Again";
     }
   }

?>

<meta http-equiv="refresh" content="10; URL='temp1.php'"/> 
</body>
</html>