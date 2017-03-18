<?php
	session_start();
	include('connect.php');
	$post_cont = $_SESSION["insert_text"];
	$query = "INSERT INTO `text` (`post_cont`) VALUE ('$post_cont')";
	mysqli_query($conn,$query) or die (mysqli_error($conn));
	header("Location: fb_posts.php");