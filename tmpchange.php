<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="tmpchng.css.css">
</head>
<body style="background-color: lightgrey">
<div>
<form method="post" action="upload2.php" enctype="multipart/form-data">
	<h3>Choose file & submit your session, registration number to confirm</h3><br>
<input type="hidden" name="MAX_FILE_SIZE" value="100000000"/><input name="uploadedfilee" type="file" style="height:35px;" /><br>
<div class="input-container">
      <label>Session</label><br>
  <input class="input-field"  type="text" name="session" placeholder="Enter your session here" autocomplete="off">
    </div><br>

    <div class="input-container">
    <label>Registration Number</label><br>
  <input class="input-field"  type="text" name="regnum" placeholder="Enter Registration Number" autocomplete="off">
    </div><br>
<p style="text-align: center"><input type="submit" value="submit" name="submit"></p>
</form>
</div>
</body>
</html>