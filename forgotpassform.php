<!DOCTYPE html>
<html>
<head>
	<title>ForgotPassword</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="tmp2.css">
	
</head>

<body style="background-color: lightgrey"><br><br><br><br><br><br><br>
<div >

	<form action="passwordRetrieve.php" method="post" enctype='multipart/form-data'>
	    <h3>Enter Email & Get Password</h3><br>

		<div class="input-container">
			<label>Email:</label><br><br>

		    <input class="input-field" type="Email" name="email" class="email" autocomplete="off"><br>
		</div>
      
       <p style="text-align: center"><input type="submit" value="Get Password" name="but_upload"> </p>
	</form>
</div>
</body>
</html>