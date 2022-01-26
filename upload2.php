<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: lightgrey; text-align: center"><br><br><br><br><br>

<?php

$conn = new mysqli("localhost", "root", "", "project");
$name = $_FILES['uploadedfilee']['name'];
$session = $_POST['session'];
$regnum = $_POST['regnum'];
$sql = "SELECT * FROM members WHERE session='".$session."' AND regnum='".$regnum."' AND status='yes' ";
$res = mysqli_query($conn, $sql);
$n = mysqli_num_rows($res);
if($n!=1){
	echo "<h2 style='text-align:center'> Your Session & Registration Number is Invalid</h2>"; return;
}
//echo $name ;

	$target_dir = "photo/";
 	$target_file = $target_dir . basename($_FILES['uploadedfilee']["name"]);

  	// Select file type
  	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  	// Valid file extensions
  	$extensions_arr = array("jpg","jpeg","png","gif");

 	 // Check extension
  	if( in_array($imageFileType,$extensions_arr) ){


	$sql3 = "UPDATE images SET img = '".$name."' WHERE session = '".$session."' AND regnum = '".$regnum."' ";

	move_uploaded_file($_FILES['uploadedfilee']['tmp_name'],$target_dir.$name);

	if(mysqli_query($conn, $sql3)){
		echo "<h2> Photo Changed Successfully.!!!</h2>";
	}else{
		echo "<h2> Failed To Change Photo. Try Again.</h2>";
		}
	}

?>

<meta http-equiv="refresh" content="4; URL='profile2.php'"/> 
</body>
</html>