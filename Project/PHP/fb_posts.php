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
		<form method="POST" action="" enctype="multipart/form-data">
			<textarea name="text"></textarea>
			<input type="file" name="img"/>
			<p></p>
			<input type="submit" name="submit" value="Send">
		</form>
		<a href="logout.php">Log Out</a>
		<?php
			if(isset($_POST['submit'])){
				if($_POST['text'] ="" or $_FILES['img']['name'] =""){
					echo 'You havent typed anything or you havent picked any photo';
				}else{
					$uname = $_SESSION["uname"];
					$upload_date= date("Y,m,d");
					$query = "INSERT INTO `posts` (`uname`,`upload_date`) VALUE ('$uname','$upload_date');";
					
					if($_POST['text'] !="" && $_FILES['img']['name'] !=""){
						
						$img =$_FILES['img']['name'];
						$post_cont = $_POST['text'];
						$query .= "INSERT INTO `text` (`post_cont`) VALUE ('$post_cont');";
						$query .= "INSERT INTO `img` (`img_path`) VALUE ('$img')";
						
					}elseif($_POST['text'] !=""){
						
						$post_cont = $_POST['text'];
						$query .= "INSERT INTO `text` (`post_cont`) VALUE ('$post_cont')";
						
					}elseif($_FILES['img']['name'] !=""){
						
						$img =$_FILES['img']['name'];
						$query .= "INSERT INTO `img` (`img_path`) VALUE ('$img')";
						
					}
					mysqli_multi_query($conn,$query); 	
				}
			}
		?>
	</body>
</html>