<?php

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
    		header('location: http://localhost/SWE%20Project/SWE%20Project/myaccount.php');
        return;
    	}
      else{
      echo "Connection Failed. Try Again";
    }
}

?>