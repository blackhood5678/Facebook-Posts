<?php
	session_start();
	include('connect.php');
	if(isset($_POST['number']) && ($_POST['uname']) && isset($_POST['email']) && isset($_POST['pass'])){
		if($_POST['number'] !="" && $_POST['uname'] !="" && $_POST['email'] !="" && $_POST['pass'] !="") {
			
			$uname= $_POST['uname'];
			$email= $_POST['email'];
			$pass= $_POST['pass'];
			$phone= $_POST['number'];
			
			$query = "INSERT into `registers` (`uname`,`email`,`password`,`phone`) VALUES ('$uname','$email','$pass','$phone')";
			
			$sql= mysqli_query($conn, $query) or die (mysqli_error($conn));
		}else{
			echo 'You havent filled all the boxes';
		}
	}else{
		echo 'You havent filled all the boxes';
	}
	header("Location: index.php");
	
