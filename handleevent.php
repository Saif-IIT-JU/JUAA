<!DOCTYPE html>
<html>
<head>
	<title>Handle Event</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css">
  body{
      font-family: Century;
       background: #f1f1f1;
    }
*{
  margin: 0;
  padding: 0;
  font-family: Century;
  box-sizing: border-box;
}

  	
h4{
	margin-top: 50px;
	text-align: center;


}

* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  font-size: 17px;
}

.container {
	width: 45%;
  position: relative;
  max-width: 800px;
  margin-top: 100px;
  margin-left: 350px;
}

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

.card{
	margin-top: 50px;

  background-color: white;
  padding: 30px;
  padding-bottom: 20px; 
  margin-left: 100px;
  margin-right: 100px;
  text-align: center;
}
.card h3{
	margin-top: 20px;
	font-size: 20px;
}
.card1{
	
width: 45%;
  background-color: white;
  padding: 20px;
  padding-bottom: 80px; 
  margin-top: 100px;
  margin-left: 50px;
   
  
  
}
.card1 h5{
	margin-top: 100px;
	text-align: center;
}

.card2{
	
width: 40%;
  background-color: white;
  padding: 20px;
  padding-bottom: 20px; 
  margin-top: 100px;
  margin-left: 800px;
  margin-top: -1000px;
  margin-bottom: 100px;
   
  
  
}
.card2 h5{
	margin-top: 100px;
	text-align: center;
}
form{
	border-style: solid;
border-color: grey;
margin-top: 50px;
 margin-left: 50px;
  margin-right: 50px;

	
padding-top:10px;
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
.textarea-field {
height: 120px;
width: 90%;
padding: 10px;
background:#EEEAE9;
outline: none;
border: 1px transparent; 
}

.button {
 border: none;
 color: black;
background-color: #C2C6CA;
padding: 10px 20px;
text-align: center;
text-decoration: none;
cursor: pointer;
margin-left:190px;
margin-bottom: 20px;
font-size: 15px;  
}
            
.button:hover {
opacity: 1;
}

.fbutton {
 border: none;
 color: black;
 width: 30%;
background-color: #C2C6CA;
padding: 10px 20px;
text-align: center;
text-decoration: none;
cursor: pointer;
margin-left:520px;

margin-bottom: 10px;
font-size: 15px;  
}
            
.button:hover {
opacity: 1;
}




  </style>
</head>
<body>

<h4>If you are a registered JU alumni member,you can always create your own events from here very easily!Creating an event helps alumni to communicate with each other,express their thoughts and stronger their bond even more,Create your own event and let everyone know.</h4>
<div class="container">
  <img src="pic/alumni2.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
   
    <p>Creating an event helps alumni to communicate with each other,express their thoughts and stronger their bond even more.</p>
  </div>
</div>


<div class="card1">
<h5>Want to create an event?Fill the form below and submit it now!!</h5>
	<form action="Event2.php" method = "post">
	    <div class="input-container"> 
			<label>Event Date:</label>
		    <input class="input-field" type="Date" name="date" class="date" autocomplete="off"><br>
	    </div>

	    <div class="input-container"> 
			<label>Event Start Time:</label>
		    <input class="input-field" type="Time" name="stime" class="time" autocomplete="off"><br>
	    </div>

	    <div class="input-container"> 
			<label>Event End Time:</label>
		    <input class="input-field" type="Time" name="etime" class="time" autocomplete="off"><br>
	    </div>

      <div class="input-container"> 
      <label>Registration Closing Date:</label>
        <input class="input-field" type="Date" name="reg_close" class="date" autocomplete="off"><br>
      </div>

      <div class="input-container"> 
      <label>Registration Fee:</label>
        <input class="input-field" type="text" name="fee" class="title" autocomplete="off" placeholder="For free registration enter 0 otherwise enter the amount" required><br>
      </div>

	    <div class="input-container"> 
			<label>Event Title:</label>
		    <input class="input-field" type="text" name="title" class="title" autocomplete="off"><br>
	    </div>

	    <div class="input-container"> 
			<label>Event description:</label>
		    <textarea class="textarea-field" name="des" >Enter description here</textarea>
	    </div>

	    <div class="input-container">
      <label for="dept"> Event for specific Department/Institute:</label>
            <select class="input-field" type="text"  name="dept" id="dept">
            <option value="none">none</option>
            <option value="Department of English">Department of English</option>
            <option value="Department of Chemistry">Department of Chemistry</option>
            <option value="Department of Bangla">Department of Bangla</option>
            <option value="Department of Zoology">Department of Zoology</option>
            <option value="Department of Biology">Department of Biology</option>
            <option value="Department of Mathematics">Department of Mathematics</option>
            <option value="Department of Anthropology">Department of Anthropology</option>
            <option value="Institute of Information Technology">Institute of Information Technology</option>
            <option value="Institute of Business Administration">Institute of Business Administration</option>
            </select><br>
    </div>

    	<div class="input-container">
      <label for="dept"> Event for specific Batch:</label>
            <select class="input-field" type="text"  name="batch" id="dept">
            <option value="none">none</option>
            
            <?php
            	for($i=1; $i<=49; $i++){
            		?>
            		<?php $ii = (string)$i ?>
            		<option value="<?php echo $ii; ?>"><?php echo $i; ?></option>
            		<?php
            	}
            ?>

            </select><br>
    </div>

	    <div class="input-container">
			<label>Enter your registration Number</label>
            <input class="input-field" type="text" name="reg"><br>

		</div>


		<div class="input-container">
			<label>Session:</label>
            <input class="input-field" type="text" name="session"><br>
		</div>

	    <p style="text-align: center"><input type="submit" value="Submit" name="submit"><br><br><br></p>
</form>
</div>

<div class="card2">
<h5>In case you want to delete your own event!</h5>
	<form action="Delete2.php" method="post">


	    <div class="input-container"> 
			<label>Event ID:</label>
		    <input class="input-field" type="id" name="id" class="id" autocomplete="off"><br>
	    </div>
	    <div class="input-container"> 
			<label>Event Date:</label>
		    <input class="input-field" type="Date" name="date" class="date" autocomplete="off"><br>
	    </div>

	    <div class="input-container">
			<label>Enter your registration Number</label>
            <input class="input-field" type="text" name="regnum"><br>

		</div>


		<div class="input-container">
			<label>Session:</label>
            <input class="input-field" type="text" name="session"><br>
		</div>

	    <p style="text-align: center"><input type="submit" value="DeleteYourEvent" name="submit"><br><br><br><br></p>
</form>
</div>

</body>

</html>