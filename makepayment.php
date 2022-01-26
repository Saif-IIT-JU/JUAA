<!DOCTYPE html>
<html>
<head>
  <title>Make Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
  
  

         form{
          border-style: solid;
         border-color: grey;
          margin-top: 40px;
          margin-left: 300px;
          margin-right: 300px;  
          padding-top: 20px;
          padding-left: 20px;
          margin-bottom: 50px;
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
            width:90%;
            padding: 10px;
            background:#EEEAE9;
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
  padding-bottom: 50px; 
  margin-top: 20px;
  margin-left: 100px;
  margin-right: 100px;
}

.card1{

  background-color: white;
  padding: 30px;
  padding-bottom: 50px; 
  margin-top: 20px;
  margin-left: 100px;
  margin-right: 100px;
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
  <div class="dropdown">
    <button class="dropbtn">  <a class="active"  href="#">Membership</a>

      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="registration.php">Registration</a>
      <a href="temp1.php">Account Login</a>
    </div>
  </div> 
 
     <a href="gallery.php">Gallery</a>
  <a href="donate.php">Sponsors and Donors</a>
  <a href="News.php">News/Notice</a>
  <a href="contact.php">Contact Us</a>
    <a href="https://juniv.edu/" target="_blank">JU</a>

</div>

<div >
<div class="card">
  <h2>Making Monthly Payment</h2>
</div>

<div class="card1">
  <form action="makepayment2.php" method="post" enctype='multipart/form-data'>
      <h3>Payment Form</h3><br><br><br>

    <div class="input-container">
        <p>Monthly Payment of fee Tk 500.Pay via ----- and put the transaction number below.</p>
            <label>Transaction Number:</label>
            <input class="input-field" type="text" name="transaction">
    </div>


    <div class="input-container">
      <label>Session:</label>
            <input class="input-field" type="text" name="session" placeholder="e.g: 2016-17"><br>
    </div>
    
    <div class="input-container">
      <label>Enter your registration Number</label>
            <input class="input-field" type="text" name="regnum"><br>

    </div>

    <div class="input-container">
      <label>Password:</label>
        <input class="input-field" type="Password" name="password" class="password" autocomplete="off"><br>
    </div>
      
       <p style="text-align: center"></big><input type="submit" value="Submit" name="but_upload"> </p>
  </form>
</div>
  
</div>
</body>
<footer>
<div class="address">
  <h3>Jahangirnagar University Alumni Association</h3>
  <address>Register Building,Room No #131<br>Jahangirnagar University,Savar,Dhaka
       </address><br>
  <p>Contact Numbers:<br>(01876783515-520)</p>
<p >Gmail:alumni@juniv.edu</p> 
</footer>
</html>