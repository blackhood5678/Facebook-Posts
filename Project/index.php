<?php
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href=""> 
		<title>Facebook Posts</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<form method="post" action="">
			<input type="text" name="fname" placeholder="First Name"/>
			<input type="text" name="lname" placeholder="Last Name"/>
			<p></p>
			<input type="email" name="email" placeholder="E-mail"/>
			<p></p>
			<input type="password" name="pass" placeholder="Password"/>
			<p></p>
			<input type="submit" name="submit" value="Sign Up"/>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['pass'])){
		if($_POST['fname'] !="" && $_POST['lname'] !="" && $_POST['email'] !="" && $_POST['pass'] !="") {
			
			$first_name= $_POST['fname'];
			$last_name= $_POST['lname'];
			$email= $_POST['email'];
			$pass= $_POST['pass'];;
			
			$query = "INSERT into `password` (`password`) VALUES ('".$pass."')";
					 "INSERT into `first_name` (`first_name_id`) VALUES ('".$first_name."')";
					 "INSERT into `last_name` (`last_name_id`) VALUES ('".$last_name."')";
					 "INSERT into `email` (`email_id`) VALUES ('".$email."')";
			
			$sql= mysqli_query($conn, $query);
		}else{
			echo 'You havent filled all the boxes';
		}
	}else{
		echo 'You havent filled all the boxes';
	}