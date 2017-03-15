<?php
	session_start();
	include('connect.php');
	if(($_POST['email']) && isset($_POST['pass'])){
		if($_POST['email'] !="" && $_POST['pass'] !="") {
			
			$email= $_POST['email'];
			$pass= $_POST['pass'];;
			
			$query = "SELECT * FROM `registers` WHERE email='$email' AND password='$pass' ";
			
			$sql= mysqli_query($conn, $query) or die (mysqli_error($conn));
			
			if(!$row = mysqli_fetch_assoc($sql)){
				echo 'Your E-mail or password are incorrect!';
			}else{
				$_SESSION['id']= $row['id_register'];
			}
			
		}else{
			echo 'You havent filled all the boxes';
		}
	}else{
		echo 'You havent filled all the boxes';
	}
	header("Location: index.php");
?>