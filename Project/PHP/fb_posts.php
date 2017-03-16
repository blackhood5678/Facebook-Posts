<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href=""> 
		<title>Facebook Posts</title>
		<meta charset="UTF-8">
	</head>
	<body>
	
		<a href="logout.php">Log Out</a>
		
		<form method="POST" action="">
		<div>
			<textarea name="text"></textarea>
		</div>
		<div>
			<input type="file" name="file">
		</div>
		<div>
			<input type="submit" nema="button" value="Send">
		</div>
		</form>
	</body>
</html>
