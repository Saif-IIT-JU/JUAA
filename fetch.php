<?php

//fetch.php

include('database_connection.php');

if(isset($_POST["id"]))
{
 $query = "SELECT * FROM chatbox WHERE date = '".$_POST["id"]."'";

 $statement = $connect->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 $output = '';

 foreach($result as $row)
 {
 		$conn = new mysqli("localhost", "root", "", "project");
          $session = $row["session"];
          $regnum = $row["regnum"];
          $sql2 = "SELECT * FROM members WHERE session='".$session."' AND regnum='".$regnum."' ";
          $res2 = mysqli_query($conn, $sql2);
          $n = mysqli_num_rows($res2);
          if($n!=0){
            $row2 = mysqli_fetch_assoc($res2);
            $fname = $row2["fname"];
            $lname = $row2["lname"];
            $name=""; $name.=$fname; $name.=" "; $name.=$lname;
          }
  $output .= '
  <h4>'.$name.'</h4>
  <h4>'.$row["date"].'</h4>
  ';
 }
 echo $output;
}

?>