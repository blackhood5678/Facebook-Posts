<?php
	session_start();
	include('connect.php');
	$img = $_SESSION["insert_img"];
	$query = "INSERT INTO `img` (`img_path`) VALUE ('$img')";
	mysqli_query($conn,$query) or die (mysqli_error($conn));
	header("Location: fb_posts.php");