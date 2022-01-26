<!DOCTYPE html>
<html>
<head>
	<title>Edit Account</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="tmpchng.css.css">
</head>
<body style="background-color: lightgray">
<form action="EditAccountForm2.php" method="post">

        <div class="input-container">
	    	<label class="fname">First Name:</label>
		    <input class="input-field" type="text" name="fname"  autocomplete="off"><br>
	    </div>
		
		<div class="input-container">
			<label>Last Name:</label>
		    <input class="input-field" type="text" name="lname" class="lname" autocomplete="off"><br>
		</div>

	<div class="input-container">
			<label for="degree">Degree:</label><br>
            <select class="input-field" name="degree" id="degree"><br>
            <option value="Select Degree">Select Degree</option>
            <option value="BSc">BSc</option>
            <option value="Msc">Msc</option>
            </select><br>
		</div>

		

		<div  class="input-container">
			<label>Date of Birth</label>
		    <input class="input-field" type="Date" name="dob" autocomplete="off"><br>
		</div>

		<div class="input-container">
			<label>Contact addres:</label>
            <input class="input-field" type="text" name="address">
		</div>
		<h4>Enter these fields carefully</h4>
<div class="input-container">
	    	<label class="session">Session:</label>
		    <input class="input-field" type="text" name="session"  autocomplete="off"><br>
	    </div>
		
		<div class="input-container">
			<label>Registration Number:</label>
		    <input class="input-field" type="text" name="regnum" class="regnum" autocomplete="off"><br>
		</div>
		<div class="input-container">
			<label>Enter Password :</label>
		    <input class="input-field" type="Password" name="password" class="password" autocomplete="off"><br>
		</div>


		<p style="text-align: center"><input type="submit" value="Save" name="submit"></p>

</form>
</body>
</html>