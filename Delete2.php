<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>DeleteEvent</title>
</head>
<body style="background-color: lightgrey; text-align: center"><br><br><br><br>
	<?php

		$id = $_POST['id'];
		$date = $_POST['date'];
		$session = $_POST['session'];
		$reg = $_POST['regnum'];

		$conn = mysqli_connect('localhost', 'root', '', 'project');
		if(!$conn){
			echo "Connection Failed!!";
		}
		else{

			$sql = "SELECT* FROM events WHERE id = '".$id."' ";
			$res = mysqli_query($conn, $sql);
			$n = mysqli_num_rows($res);
			if($n==0){
				echo "<h2>NO EVENT FOR THIS ID.</h2>";
			}else{

			$row = mysqli_fetch_assoc($res);
			//echo "RUN ". $row["host_session"] . " " .$row["host_reg"]. " ". $session. " ". $reg. "<br>";
			if(strcmp($row["host_session"], $session)==0 && strcmp($row["host_reg"], $reg)==0){
			$time = $row["time"];

			$sql2 = "DELETE FROM events WHERE id = '".$id."' ";
			$res2 = mysqli_query($conn, $sql2);

			if($res2){
				echo "<h2>The Event Is Deleted.</h2>";

				$q1 = "SELECT * FROM members WHERE session='".$session."' AND regnum='".$reg."' "; 
				$r1 = mysqli_query($conn, $q1);
				$row1 = mysqli_fetch_assoc($r1);
				$host_name1 = $row1["fname"];
				$host_name2 = $row1["lname"];

				$q2 = "SELECT * FROM members";
				$r2 = mysqli_query($conn, $q2);

				while($row2=mysqli_fetch_assoc($r2)){
					$to = $row2["email"];

					$subj = "Event Deletion";
					$body = "Hey ";
					$body .= $row2["fname"]; $body .= " "; $body .= $row2["lname"]; $body .= ", ";
					$body .= "An event which is going to be held on "; $body .= $date; $body .= " at "; $body .= $time; $body .= "  has been deleted by the host ";
					$body .= $host_name1; $body .=" "; $body .= $host_name2;
					$body .= " .  Please Check Details Description in VIEW ALL EVENTS of our JUAA WEBSITE.";

					$header = "This mail has been created automatically by JUAA WEBSITE";

					if(mail($to, $subj, $body, $header)){
						//echo "Mailed Successfully";
					}else{
						//echo "mail failed";
					}

				}

				$to = $row1["email"];
				$subj = "DeletionOfYourEvent";
				$body = "You have deleted your event which Event Id was : "; $body .=$id;
				$header = "This mail has been created automatically by JUAA WEBSITE";

				if(mail($to, $subj, $body, $header)){

				}
				else{

				}
			}else{
			echo "<h2>Failed to Delete. Try Again.</h2>";
			}
			}
			else{
			echo "<h2>You Are Not The Host of This Event. So You Can't Delete this!!!</h2>";
			}
		}
	}
	?>

<meta http-equiv="refresh" content="7; URL='home.php'"/> 
</body>
</html>