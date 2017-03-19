<?php
	session_start();
	include('connect.php');
	
	$read_query = "SELECT * FROM `posts` WHERE date_deleted IS NULL";
$result = mysqli_query($conn,$read_query);

if (mysqli_num_rows($result) > 0)
{	echo '<table border=1>';
	while($row = mysqli_fetch_assoc($result))
			{
				echo '<tr>';
				echo '<td>'. $row['uname'] .'</td>';
				echo '<td>'. $row['text'] .'</td>';	
				echo '<td> <img src="../pic/'.$row['img'].'" alt="pic1"/>'.'</td>';	
				echo '<td>'. $row['upload_date'] .'</td>';
				$postid = $row['post_id'];
				echo '<td>'			
				?>
					<button name = "<?$postid?>" type="button">Like</button>
				<?php		
				'</td>';
				$likes = 0;	
				
				
				if(isset($_POST['button']) && $postid = $_POST['$postid'] )
				{
					$likes++ ;
				}
				echo '<td>'. $likes .'</td>';
				echo '</tr>';			
				
			}
		echo '</table>';
		echo '<p>'.'</p>';
}
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
