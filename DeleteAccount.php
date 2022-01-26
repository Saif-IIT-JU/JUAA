<!DOCTYPE html>
<html>
<head>
	<title>Delete Account</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="tmpchng.css.css">
</head>
<body style="background-color: lightgrey">
<form action="DeleteAccount2.php" method="post">
	<h3>Confirm Your Session, Registration Number & Password</h3>
		<div class="input-container"> 
			<label>Your Session:</label>
		    <input class="input-field" type="text" name="session" class="text" autocomplete="off"><br>
	    </div>
	    <div class="input-container"> 
			<label>Your Registration No:</label>
		    <input class="input-field" type="text" name="reg" class="text" autocomplete="off"><br>
	    </div>

	    <div class="input-container"> 
			<label>Password:</label>
		    <input class="input-field" type="password" name="password" class="password" autocomplete="off"><br>
	    </div>

	    <p><small>Note: your membership and all events created by you will be parmanently cancelled.</small></p><br>
	    <p style="text-align: center"> Submit : <input type="submit" value="submit" name="submit"><br></p>



</form>
</body>
</html>