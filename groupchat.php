<!--
//index.php
!-->

<?php

include('database_connection.php');

$query = "SELECT * FROM chatbox ";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

?>

<html>  
    <head>  
        <title>Messages</title>  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
  
        img {
            border-radius: 300%;
        }

         form{
          text-align: center;
         
         border-color: grey;
          margin-top: 40px;
          margin-left: 150px;
          margin-right: 00px;  
          padding-top: 20px;
          padding-left: 20px;
          margin-bottom: 5px;
            }

         h3{
          text-align: center;
          font-size: 25px;
            }

         .input-container{
          padding-bottom: 30px;
          width: 100%;
          }

         .input-field {
            width:55%;
            padding: 10px;
            background:lightgreen;
            outline: none;
            border: 1px transparent;  
            }
         
         .input-field:focus {
           border: 1px grey;
           }
          
          .button {
  
             border: none;
             color: black;
             background-color: #C2C6CA;
             padding: 10px 20px;
             text-align: center;
             text-decoration: none;
             cursor: pointer;
             margin-left:500px;
             margin-top: 50px;
             margin-bottom: 30px;
             font-size: 15px;  
               }
            
            .button:hover {
             opacity: 1;
              }
          
    .card{

  background-color: white;
  padding: 30px;
  padding-bottom: 100px; 
  margin-top: 20px;
  margin-left: 100px;
  margin-right: 100px;
}

.card1{

  background-color: white;
  padding: 50px;
  padding-bottom: 100px; 
  margin-top: 20px;
  margin-left: 100px;
  margin-right: 100px;
  margin-bottom: 10px;
}
.card h2{
  text-align: center;
}

  </style>
    </head>  
    <body>

<div class="topnav">


  <a  href="home.php">Home</a>
<div class="dropdown">
    <button class="dropbtn">  <a href="#">About Us</a>

      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="about1.php">Our Mission</a>
      <a href="committee.php">Committee</a>
    </div>
  </div> 

  <a href="activity.php">Activities</a>
  <a href="involve.php">Get Involved</a>
  <a  href="temp1.php">Membership</a>
 
     <a href="gallery.php">Gallery</a>
  <a href="donate.php">Sponsors and Donors</a>
  <a href="News.php">News & Event</a>
  <a href="contact.php">Contact Us</a>
    <a href="https://juniv.edu/" target="_blank">JU</a>

</div>

        <div class="container">
   <br />
   
   <br />
   <div class="row">
    <div class="col-md-3">
    
    </div>
    <div class="col-md-7">
     <div class="panel panel-default">
      <div class="panel-heading">
       <h2 class="panel-title" style="text-align: center"><b>Recent Messages</b></h2>
      </div>
      <div class="panel-body">
       <div class="table-responsive">
        
         <?php

          $conn9 = mysqli_connect('localhost', 'root', '', 'project');
          $sql9 = "SELECT* FROM chatbox ";
          $res9 = mysqli_query($conn9, $sql9);
          $rn = mysqli_num_rows($res9);
          //echo $rn. "<br>";
          mysqli_close($conn9);

          $mn9 = min($rn, 100); $lb = $rn-$mn9+1; $st = 1;

         foreach($result as $row)
         {

          $conn = new mysqli("localhost", "root", "", "project");
          $session = $row["session"];
          $regnum = $row["regnum"];
          $sql2 = "SELECT * FROM images WHERE session='".$session."' AND regnum='".$regnum."' AND img IS NOT NULL";
          $res2 = mysqli_query($conn, $sql2);
          $n = mysqli_num_rows($res2);

          $sql3 = "SELECT * FROM members WHERE status='yes' ";
          $res3 = mysqli_query($conn, $sql3);
          $row3 = mysqli_fetch_assoc($res3);
          $ses2 = $row3["session"];
          $regnum2 = $row3["regnum"];

          if($st>=$lb){
          if(!($session==$ses2 && $regnum==$regnum2)){

          if($n!=0){
            $row2 = mysqli_fetch_assoc($res2);
            $img = $row2["img"];
            $image_src = 'photo/'.$img;
          }?><img src='<?php echo $image_src;  ?>' style="width:40px; height: 40px">
          <?php
          echo '<a href="#" id="'.$row["date"].'" title=" ">'.$row["msg"].'</a><br><br>';}

          else{
            echo '<a href="#" id="'.$row["date"].'" title=" ">'.'<h3 style="text-align:right; color:green; font-size:20px">'.$row["msg"].'</h3></a>';
          }


         }

         $st++;
          }
         ?>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <form action="groupchat0.php" method="post" enctype='multipart/form-data'>
      
        <input class="input-field" type="text" name="msg" placeholder="TypeYourMessageHere" autocomplete="off">
        <input type="submit" value="Send" name="but_upload"><br><br>

  </form>
  <p style="text-align: center"><button ><a href="profile2.php" style="text-decoration: none; color: green;">BackToYourMainProfile</button></a></button></p>
    </body>  
</html>  




<script>  
$(document).ready(function(){ 

 $('a').tooltip({
  classes:{
   "ui-tooltip":"highlight"
  },
  position:{ my:'left center', at:'right+10 center'},
  content:function(result){
   $.post('fetch.php', {
    id:$(this).attr('id')
   }, function(data){
    result(data);
   });
  }
 });
  
});  
</script>