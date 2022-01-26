
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<?php

  $id = $_GET['param1'];
  $fee = $_GET['param2'];
  $size = $_POST['size'];
  $color = $_POST['color'];
  $name = $_POST['name'];
  $transaction = $_POST['transaction'];
 // echo $id;

  $conn = mysqli_connect('localhost', 'root', '', 'project');

  if(!$conn){
    echo "Connecttion Failed!"; return ;
  }else{
   // echo "Connection Successful<br>";
    $sql0 = "SELECT * FROM transactions WHERE Transaction_no='".$transaction."' AND amount='".$fee."' ";
    $res0 = mysqli_query($conn, $sql0);
    $num = mysqli_num_rows($res0);
    if($num==0 && !($fee=="0" || $fee=="00" || $fee=="000")){
    echo "<h2 style='text-align: center'><br><br>Transaction number isn't valid!</h2>";
    return ;
  }

    $sql0 = "SELECT * FROM members WHERE status='yes' ";
    $res0 = mysqli_query($conn, $sql0);
    $num = mysqli_num_rows($res0);
    if($num!=1){
     // echo '<script type="text/javascript"> alert("Please LogIn First!"); </script>' ;
      header('location: http://localhost/SWE%20Project/SWE%20Project/login4.php');
      return;
    }
    $row0 = mysqli_fetch_assoc($res0);
    $uname = $row0["uname"];

    $sql1 = "SELECT * FROM eventregistrants WHERE event_id='".$id."' AND uname='".$uname."' ";
    $res1 = mysqli_query($conn, $sql1);
    $num1 = mysqli_num_rows($res1);
    if($num1!=0){
      echo '<script type="text/javascript"> alert("You Are Already Registered For This Event."); </script>' ;
    }else{ 

    $sql = "INSERT INTO eventregistrants(event_id, uname, name, size, color) VALUES('".$id."', '".$uname."', '".$name."', '".$size."', '".$color."') ";
    $res = mysqli_query($conn, $sql);
    if(!$res){
      echo '<script type="text/javascript"> alert("Registration Failed. Try Again"); </script>' ;
    }
    else{
      echo '<script type="text/javascript"> alert("You Have Been Successfully Registered!") </script>' ;
    }
  }
  }

?>

<meta http-equiv="refresh" content='0; URL="ShowEvents.php'/> 

</body>
</html>