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
		<form method="post" action="" enctype="multipart/form-data">
			<textarea name="text"></textarea>
			<input type="file" name="img_name"/>
			<p></p>
			<input type="submit" name="submit" value="Send">
		</form>
		<a href="logout.php">Log Out</a>
		<?php
			if(isset($_POST['submit'])){
				$uname = $_SESSION["uname"];
				$upload_date= date("Y,m,d");
				$text = $_POST['text'];
				$target = "../pic/" . basename( $_FILES['img_name']['name']);
				$img =($_FILES['img_name']['name']);
				
					if($text !="" && $img !=""){
						
						$query = "INSERT INTO `posts` (`uname`,`upload_date`) VALUE ('$uname','$upload_date'); ";
						$query .= "INSERT INTO `img` (`img_path`) VALUE ('$img'); ";
						$query .= "INSERT INTO `text` (`post_cont`) VALUE ('$text'); ";
						mysqli_multi_query($conn,$query) or die (mysqli_error($conn));
						
					}elseif($text !=""){
						
						$query = "INSERT INTO `posts` (`uname`,`upload_date`) VALUE ('$uname','$upload_date'); ";
						$query .= "INSERT INTO `text` (`post_cont`) VALUE ('$text'); ";
						mysqli_multi_query($conn,$query) or die (mysqli_error($conn));
						
					}elseif($img !=""){
						
						$query = "INSERT INTO `posts` (`uname`,`upload_date`) VALUE ('$uname','$upload_date'); ";
						$query .= "INSERT INTO `img` (`img_path`) VALUE ('$img')";";
						mysqli_multi_query($conn,$query) or die (mysqli_error($conn));
						
					} 	
			}
		?>
	</body>
</html>
