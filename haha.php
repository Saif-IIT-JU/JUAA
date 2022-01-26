<?php
	
	echo "test<br>";
	$to = "saifuriit46@gmail.com";

					$subj = "test";
				/*	$body = "Hey ";
					$body .= $row2["fname"]; $body .= " "; $body .= $row2["lname"]; $body .= ", ";
					$body .= "An event is going to be held on "; $body .= $date; $body .= " at "; $body .= $time; $body .=" to "; $body .= $etime; $body.=". But you haven't registerd yet. Please register soon."; */

					$body = "An event is going to be held \n\n\n\n Registration link: http://localhost/SWE%20Project/SWE%20Project/eventRegistration0.php?param1=";
					$body .="4";

					$header = "This mail has been created automatically by JUAA WEBSITE";

					if(mail($to, $subj, $body, $header)){
						echo "Mailed Successfully";
					}else{
						echo "mail failed";
					}

?>