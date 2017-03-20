<?php
	session_start();
	include('connect.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../Styles/style2"> 
		<title>Comments</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<form method="post" action="">
			<textarea name="text"></textarea>
			<p></p>
			<input type="submit" name="submit" value="Comment">
		</form>
		<a href="fb_posts.php">Back to posts</a>
		<?php
			if(isset($_POST['submit'])){
				
				$uname = $_SESSION["name"];
				$upload_date= date("Y,m,d");
				$text = $_POST['text'];
				if($text =="" ){
					echo '<p>You havent typed anything</p>';
				}else{
					$query = "INSERT INTO `comments` (`comments`,`date`,`name`) VALUE ('$text','$upload_date','$name')";
					mysqli_query($conn,$query) or die (mysqli_error($conn));
				}
			}
			$read_query = "SELECT * FROM `comments` WHERE date_deleted IS NULL";
			$result = mysqli_query($conn,$read_query);

			if (mysqli_num_rows($result) > 0){	
				while($row = mysqli_fetch_assoc($result)){
					echo '<div id="comment">';
					echo '<div id="name">'. $row['name'] .'</div>';
					echo '<div id="text">'. $row['comments'] .'</div>';
					echo '<div id="date">'. $row['date'] .'</div>';
					
					echo '<p></p>';
					echo '</div>';				
				}
			}			
		?>
	</body>
</html>