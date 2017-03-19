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
				//$target = "../pic/" . basename( $_FILES['img_name']['name']);
				$img =$_FILES['img_name']['name'];
				$_SESSION["picture"] = $_FILES['img_name']['name'];
				if($text =="" && $img ==""){
					echo '<p>You havent typed anything or you havent picked any photo</p>';
				}else{
					$query = "INSERT INTO `posts` (`uname`,`upload_date`,`img`,`text`) VALUE ('$uname','$upload_date','$img','$text')";
					mysqli_query($conn,$query) or die (mysqli_error($conn));
				}
			}	
		?>
	</body>
</html>
