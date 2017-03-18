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
			<input type="file" name="img_name"/>
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
					$query = "INSERT INTO `posts` (`uname`,`upload_date`) VALUE ('$uname','$upload_date')";
					mysqli_query($conn,$query) or die (mysqli_error($conn));
					
					if($_POST['text'] !="" && $_FILES['img']['name'] !=""){
						
						$_SESSION["insert_text"]= $_POST['text'];
						$_SESSION["insert_img"]= $_FILES['img']['tmp_name'];
						header("Location: insert_text.php");
						header("Location: insert_img.php");
						
					}elseif($_POST['text'] !=""){
						
						$_SESSION["insert_text"]= $_POST['text'];
						header("Location: insert_text.php");
						
					}elseif($_FILES['img']['name'] !=""){
						
						$_SESSION["insert_img"]= $_FILES['img']['tmp_name'];
						header("Location: insert_img.php");
					} 	
				}
			}
		?>
	</body>
</html>