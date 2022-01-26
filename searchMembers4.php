
<!DOCTYPE html>
<html>
<head>
  <title>search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <link rel="stylesheet" type="text/css" href="style.css">

  <style type="text/css">




form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

.title
{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}
.title p{
  text-align: center;
  font-family: cursive;
  color: white;
  
  font-size: 40px;

}
.logo1{
  width: 80px;
  margin-left:300px;
}
.card{

  background-color: white;
  padding: 30px;
  padding-bottom: 50px; 
}

.card h3{
  margin-top: -80px;
  font-size: 30px;
  text-align: center;
}


.chair{
  width: 250px;
  margin-left: 50px;
}
.message h2{
  text-align: center;
  padding-top: 20px;

}
.message p{
  text-align: left;
  font-size: 18px;
  margin-left: 320px;
  margin-right: 100px;
  margin-top: -170px;
}

.card1{
  background-color:  white;
  padding: 30px; 
  margin-top: 100px;

}
.card1 img{

  margin-left: 100px;
  margin-top: 60px;
  max-width: 270px;
}
.card1 h2{
  margin-top: 50px;
text-align: center;
margin-bottom: 50px;
}
.card1 h4{
  text-align: center;
  margin-top: 10px;
  color: #30741F;
  font-size: 20px;
}
.card1 p{
  text-align: left;
  margin-top: -120px;
  padding-bottom: 100px;
  margin-left: 500px;
  margin-right: 50px;
}


.event{
  text-align: center;
  padding-bottom: 50px;
  padding-top: 50px;

}

.btn {
  font-size: 28px;
  border:1px white;
  
  color: #30741F;
  transition:0.6s ease;
}
.btn:hover{
  background-color: #34552C;
  color:white;
}
.topnav .login-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav .login-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background-color: green;
}

@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

.mySlides {display:none;}
  .column {
  float: left;
  width: 30%;
  padding: 5px 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 50px;
  }
}

.card2 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  margin-left: 100px;
  text-align: left;
}
.nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    margin-left: 100px;
    list-style: none;
    color: white;
}
.nav-link {
  background-color: gray;
  text-decoration: none;
  padding: 20px;
  color: white;

}
a{
  text-decoration: none;
}
</style>

<script type="text/javascript">
  function PrintContent(conts){
      var printcontents = document.getElementById(conts).innerHTML;
      var originalcontents = document.body.innerHTML;
      document.body.innerHTML = printcontents;

      window.print();

      document.body.innerHTML = originalcontents;
  }
</script>

</head>

<body>

 <div class="topnav">


  <a class="active" href="home.php">Home</a>
<div class="dropdown">
    <button class="dropbtn"><a href="#"> About Us </a>
    </button>
    <div class="dropdown-content">
      <a href="about1.php">Our Mission</a>
      <a href="committee.php">Committee</a>
    </div>
  </div> 

  <a href="activity.php">Activities</a>
  <a href="involve.php">Get Involved</a>
  <div class="dropdown">
    <button class="dropbtn">  <a  href="#">Membership</a>

    </button>
    <div class="dropdown-content">
      <a href="registration.php">Registration</a>
      <a href="temp1.php">Account Login</a>
      
    </div>
  </div> 

  
     <a href="gallery.php">Gallery</a>
  <a href="donate.php">Sponsors and Donors</a>
  <a href="News.php">News & Event</a>
  <a href="contact.php">Contact Us</a>
    <a href="https://juniv.edu/" target="_blank">JU</a>
</div>

<div id = "printableArea">    

<?php

		$conn = mysqli_connect('localhost', 'root', '', 'project');
		$dept = $_POST['dept'];
   // echo $dept;
		

		if(!$conn){
			die("Connection Failed.");
		}
		else{
			//echo "Connect successfully <br>";
				$sql = "SELECT * FROM members ";
				$res = mysqli_query($conn, $sql);
			

				echo "<br><br><h2 style='text-align:center;'>Alumni Members From ". $dept ."</h2><br><br>";
				$i = 0;
				while($row = mysqli_fetch_assoc($res)){
					$fname = $row["fname"];
					$lname = $row["lname"];
					$tmpname = $fname; $tmpname .= $lname;
					$tmpname2 = "";
					for($i = 0; $i < strlen($tmpname); $i++){
						if($tmpname[$i]!=' ')
						$tmpname2 .= $tmpname[$i];
					}
					$text = strtolower($tmpname2);


///////////////////////////////////////////////////////////////////////////////
		$session = $row["session"];
    $dept2 = $row["dept"];
    $ses = ""; $ses .= $session[0]; $ses .= $session[1]; $ses .= $session[2]; $ses .= $session[3];
    $ses2 = (int)$ses;
    $batch2 = 46 - (2016 - $ses2) ;
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
				//echo "* You haven't made monthly payment for the month <b>".$mon . "</b>. Please make payment soon."; $flag = 1;
			}
			 
			$cnt++;
		}

	}
	//echo $cnt;

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

					//echo $text. " ". $pat. "<br>";
					if($dept==$dept2 && $cnt<=3){
						
					$session = $row["session"];
					$ses = ""; $ses .= $session[0]; $ses .= $session[1]; $ses .= $session[2]; $ses .= $session[3];
					$ses2 = (int)$ses;
					$batch = 46 - (2016 - $ses2) ;
					$regnum = $row["regnum"];
					$uname = $row["uname"];
					$email = $row["email"];
					$name = ""; $name .= $fname; $name .= ' '; $name .= $lname;
					$tsql = "SELECT * FROM images WHERE session ='".$session."' AND regnum='".$regnum."' ";
					$tres = mysqli_query($conn, $tsql);
					$trow = mysqli_fetch_assoc($tres);

					$output = '';
					$output .= '<style>
						table, th, td {
  						border: 1px solid black;
  						border-collapse: collapse;
						}
						th, td {
  							padding: 20px;
 						    
						}

						.tmp{
							text-align: right; 
						}
						.tmp2{
							text-align: left; 
						}

						table.center {
 						 margin-left: auto; 
 						 margin-right: auto;
						}
						</style> <table border="1px solid black" width=40% class="center"><tr>
					<td class="tmp2">
					Name : '.$name.'<br>
					Session : '.$session.'<br>
					Batch : '.$batch.'<br>
					</td>
					<td class="tmp">
  					<img src="photo/'.$trow["img"].'" style = "height: 90px; width: 90px;"  class="img-thumbnail" /><br>

  					<a href="tmprofile.php?param1='.$uname.' ">'.$uname.'</a>

  					</td>
  					</tr>
  					</table>';

					echo $output; echo "<br>";
					//echo $output;
				}
				}
			}

?>
</div>
<p style="text-align: center">
<input type="button" onclick="PrintContent('printableArea')" value="Print Result">
</p>
<br><br><br>

</body>
</html>