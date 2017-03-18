<?php
	session_start();
	include('connect.php');
	if(($_POST['uname']) && isset($_POST['pass'])){
		if($_POST['uname'] !="" && $_POST['pass'] !="") {
			
			$uname= $_POST['uname'];
			$pass= $_POST['pass'];;
			$_SESSION["uname"]= $uname;
			$query = "SELECT * FROM `registers` WHERE uname='$uname' AND password='$pass' ";
			
			$sql= mysqli_query($conn, $query) or die (mysqli_error($conn));
			
			if(!$row = mysqli_fetch_assoc($sql)){
				echo 'Your Username or password are incorrect!';
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