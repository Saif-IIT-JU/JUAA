
<!DOCTYPE html>
<html>
<head>
  <title>EventRegistration</title>
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
.box{
  border: 4px solid black;
  background-color: white;
  padding: 50px;
  padding-bottom: 250px;
  margin-left: 320px;
  margin-right: 299px;
  margin-bottom: -35px;
}
.box2{
  border: 1px solid black;
  background-color: white;
  padding: 5px;
  margin-left: 380px;
  margin-right: 350px;
  margin-top: -230px;
  margin-bottom: -400px;
}

</style>
</head>

<body style="background-image: url(pic/pexels-photo-675267.jpeg); ">

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

<?php

		$id = $_GET['param1'];
 // echo $id;

  $conn = mysqli_connect('localhost', 'root', '', 'project');

  if(!$conn){
    die("Connection failed: ". $conn->connect_error); return;
  }else{
   // echo "Connection Successful<br>";
    $sql0 = "SELECT * FROM members WHERE status='yes' ";
    $res0 = mysqli_query($conn, $sql0);
    $num = mysqli_num_rows($res0);
  /*  if($num!=1){
     // echo '<script type="text/javascript"> alert("Please LogIn First!"); </script>' ;
      header('location: http://localhost/SWE%20Project/SWE%20Project/login4.php');
      return;
    } */
    $row0 = mysqli_fetch_assoc($res0);
    $uname="";
    $flag = 1;

    $sql4 = "SELECT * from events WHERE id='".$id."' ";
      $res4 = mysqli_query($conn, $sql4);
      $row4 = mysqli_fetch_assoc($res4);
      $tdept = $row4["dept"];
      $tbatch = $row4["batch"];
    if($num!=0){
      $uname = $row0["uname"];
      $dept = $row0["dept"];
      $sesion = $row0["session"];
      $ses = ""; $ses .= $sesion[0]; $ses .= $sesion[1]; $ses .= $sesion[2]; $ses .= $sesion[3];
      $ses2 = (int)$ses;
      $batch = 46 - (2016 - $ses2) ;
      $tt = $batch; $batch = (string)$tt;

    /*  $sql4 = "SELECT * from events WHERE id='".$id."' ";
      $res4 = mysqli_query($conn, $sql4);
      $row4 = mysqli_fetch_assoc($res4);
      $tdept = $row4["dept"];
      $tbatch = $row4["batch"]; */
    //  $reg_close = $row4["reg_close"];
    //  $fee = $row4["fees"];
      //echo $fee; 

    //  echo $tbatch. " ". $tdept. " ". $dept. " ". $batch. "<br>";

      if($tbatch!="none" && $tdept!="none"){
        if($tbatch==$batch && $tdept==$dept) ;
        else $flag = 0;
      }
      else if($tbatch!="none"){
        if($tbatch!=$batch) $flag = 0;
      }
      else if($tdept!="none"){
        if($tdept!=$dept) $flag = 0;
      }
    }

    $reg_close = $row4["reg_close"];
    $fee = $row4["fees"];
    $d = date("Y-m-d");
    if($d<=$reg_close){

    if($flag==1){

    $sql1 = "SELECT * FROM eventregistrants WHERE event_id='".$id."' AND uname='".$uname."' ";
    $res1 = mysqli_query($conn, $sql1);
    $num1 = mysqli_num_rows($res1);
    if($num1!=0){
      echo '<script type="text/javascript"> alert("You Are Already Registered For This Event."); </script>' ;
    }else{ 

      $sql2 = "SELECT * FROM events WHERE id='".$id."' ";
      $res2 = mysqli_query($conn, $sql2);
      $row2 = mysqli_fetch_assoc($res2);
      $title = $row2["title"];
      $session = $row2["host_session"];
      $regnum = $row2["host_reg"];

      $sql3 = "SELECT * FROM members WHERE session='".$session."' AND regnum='".$regnum."' ";
      $res3 = mysqli_query($conn, $sql3);
      $row3 = mysqli_fetch_assoc($res3);
      $host_name = $row3["fname"]; $host_name .=' ';
      $host_name.=$row3["lname"];
      $fee = $row2["fees"];

      echo "<br><h2 style='text-align: center'>Registration for the event</h2><br>";
      echo "<h2 style='text-align: center; color: black'>". '"'. $title. '"'. " <u>hosted by ". $host_name. "</u> (<a style='color: lightblue'>Fee: ". $fee. "tk</a>)</h2><br><br>";

      $output="";
      $output.='

        <div class="box">
          The registration confirms that you:<br><br>

* have read the event title, details description, start date & time.<br>
* will not violate the rules of event management.<br>
* will not misbehave with other participants.<br>
* will not attempt to deliberately destabilize the event.<br>
* will take part in the event in time.<br>
        </div><br><br>

        <form class="box2" action="eventRegistration.php?param1='.$id.' & param2='.$fee.'" method="POST">
          <h5 style="text-align: center">T-shirt Details:</h5><br>
      <label for="dept">Size: </label>
            <select class="input-field" type="text"  name="size" id="dept">
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
            </select>
    
      <label for="dept">Color: </label>
            <select class="input-field" type="text"  name="color" id="dept">
            <option value="Black">Black</option>
            <option value="Blue">Blue</option>
            <option value="Navy-Blue">Navy-Blue</option>
            </select>

      <label>Name shown on T-shirt:</label>
        <input class="input-field" type="text" name="name" class="lname" autocomplete="off" required><br><br>
      <label>Please provide your payment transaction number here:</label>
        <input class="input-field" type="text" name="transaction" class="lname" autocomplete="off" placeholder="If fee is 0 ignore this field"><br>

        <p style="text-align: center;">
      <input type="submit" value="Register" name="but_upload" style="color: red"></p>
      </form>

      ';
      echo $output;

      return;

  }
}else{
  echo '<script type="text/javascript"> alert("You Are Not Eligible For This Event Registration."); </script>' ;
}
}else{
  echo '<script type="text/javascript"> alert("Registration has been closed."); </script>' ;
}
  }


	?>

<meta http-equiv="refresh" content='0; URL="ShowEvents.php'/> 

</body>
</html>