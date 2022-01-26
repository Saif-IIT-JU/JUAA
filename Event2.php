<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>EVENT2</title>
</head>
<body style="background-color: lightgrey; text-align: center"><br><br><br><br>

	<?php

    $session = $_POST['session'];
    $reg = $_POST['reg'];
	$date = $_POST['date'];
	$time = $_POST['stime'];
	$etime = $_POST['etime'];
	$reg_close = $_POST['reg_close'];
	$fee = $_POST['fee'];
	$title = $_POST['title'];
	$des = $_POST['des'];
	$dept = $_POST['dept'];
	$batch = $_POST['batch'];

	if(empty($date) || empty($time) || empty($etime) || empty($reg_close)){
		echo "<h2> Select Event Date, Start Time, End Time & Registration Closing Date</h2"; return;
	}
	if(empty($title)){
		echo "<h2>Please Entitle your Event</h2"; return;
	}
	if(empty($des)){
		echo "<h2>Write A Sort Description About Your Event</h2>"; return;
	}
	if($time >= $etime){
		echo "<h2>Please Select valid STARTTIME and ENDTIME</h2>"; return ;
	}

	$servername = "localhost";
	$username = "root";
	$password = "password";

	$conn = mysqli_connect('localhost', 'root', '', 'project');

	if(!$conn){
		die("Connection failed: ". $conn->connect_error);
	}

	else{
		//echo "Connect successfully<br>";

		$q1 = "SELECT * FROM members WHERE session='".$session."' AND regnum='".$reg."' "; 
		$r1 = mysqli_query($conn, $q1);
    	$nums=mysqli_num_rows($r1);

    	if($nums==0){
    		echo "<h2>You Are Not Member Of JUAA. Please Register And Try Again.</h2>";
    	}else{

		$sql = "SELECT * FROM events WHERE date='".$date."'"; 
		$res = mysqli_query($conn, $sql);
    	
    	$flag = 1;

    	while($row=mysqli_fetch_assoc($res)){
    		$l = $row["time"]; $r = $row["etime"];
    		if($etime < $l || $time > $r){

    		}else{
    			$flag = 0;
    		}
    	}

		if($flag==0){
			echo "<h2>JOOMLA!!! There Already Exists Another Event On That Time. Please Choose Another Time.</h2><br>";

		}else{

			$id = 0;
			for($i=1; $i<=1000; $i++){
				$q2 = "SELECT * FROM events WHERE id='".$i."' ";
				$r2 = mysqli_query($conn, $q2);
				if(mysqli_num_rows($r2)==0){
					$id = $i; break;
				}
			}
			$sql = "INSERT INTO events(date, time, title, des, host_session, host_reg, etime, id, dept, batch, reg_close, fees) VALUES('".$date."', '".$time."', '".$title."', '".$des."', '".$session."', '".$reg."', '".$etime."', '".$id."', '".$dept."', '".$batch."', '".$reg_close."', '".$fee."')";
			if(mysqli_query($conn, $sql)){
				echo "<h2>Event Created Successfully!!!</h2>We have sent you an eventID via email. Please keep in mind the id for further use.<br><br>";

				$row1 = mysqli_fetch_assoc($r1);
				$host_name1 = $row1["fname"];
				$host_name2 = $row1["lname"];

				$q2 = "SELECT * FROM members";
				$r2 = mysqli_query($conn, $q2);

				while($row2=mysqli_fetch_assoc($r2)){
					$to = $row2["email"];

					$subj = "New Event";
					$body = "Hey ";
					$body .= $row2["fname"]; $body .= " "; $body .= $row2["lname"]; $body .= ", ";
					$body .= "An event is going to be held on "; $body .= $date; $body .= " at "; $body .= $time; $body .=" to "; $body .= $etime; $body .= " hosted by ";
					$body .= $host_name1; $body .=" "; $body .= $host_name2;
					$body .= ". Please check details description in VIEW ALL EVENTS of our JUAA website and complete your registration soon via given registration link below.\n\n\nRegistration Link: http://localhost/SWE%20Project/SWE%20Project/eventRegistration0.php?param1=";
					$body .= $id;

					$header = "This mail has been created automatically by JUAA WEBSITE";

	  $tdept = $row2["dept"];
      $sesion = $row2["session"];
      $ses = ""; $ses .= $sesion[0]; $ses .= $sesion[1]; $ses .= $sesion[2]; $ses .= $sesion[3];
      $ses2 = (int)$ses;
      $tbatch = 46 - (2016 - $ses2) ;
      $tt = $tbatch; $tbatch = (string)$tt;


    //  echo $tbatch. " ". $tdept. " ". $dept. " ". $batch. "<br>";
      $flag = 1;

      if($batch!="none" && $dept!="none"){
        if($tbatch==$batch && $tdept==$dept) ;
        else $flag = 0;
      }
      else if($batch!="none"){
        if($tbatch!=$batch) $flag = 0;
      }
      else if($dept!="none"){
        if($tdept!=$dept) $flag = 0;
      }

      		if($flag==1){
					if(mail($to, $subj, $body, $header)){
						//echo "Mailed Successfully";
					}else{
						//echo "mail failed";
					}
					
				
				}
			}

				$to = $row1["email"];
				$subj = "YourEventId";
				$body = "You have hosted an event. Your Event Id Is : "; $body .=$id; $body .= ".   PLease keep in mind this ID for further use.";
				$header = "This mail has been created automatically by JUAA WEBSITE";

				if(mail($to, $subj, $body, $header)){

				}
				else{

				}

			}
			else echo "Faild to Create The Event. Please Try Again.<br>";
			}
		}
	}

	?>

<form action="ShowEvents.php"><h3 style="text-align: center">GO TO <input type="submit" value="Veiw All Events" name="submit"></h3></form>

</body>
</html>