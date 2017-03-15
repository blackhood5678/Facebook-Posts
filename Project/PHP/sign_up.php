<?php
	session_start();
	include('connect.php');
	if(isset($_POST['number']) && ($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['pass'])){
		if($_POST['number'] !="" && $_POST['fname'] !="" && $_POST['lname'] !="" && $_POST['email'] !="" && $_POST['pass'] !="") {
			
			$first_name= $_POST['fname'];
			$last_name= $_POST['lname'];
			$email= $_POST['email'];
			$pass= $_POST['pass'];;
			$phone= $_POST['number'];;
			
			$query = "INSERT into `registers` (`first_name`,`last_name`,`email`,`password`,`phone`) VALUES ('$first_name','$last_name','$email','$pass','$phone')";
			
			$sql= mysqli_query($conn, $query) or die (mysqli_error($conn));
			
		}else{
			echo 'You havent filled all the boxes';
		}
	}else{
		echo 'You havent filled all the boxes';
	}
	header("Location: index.php");
