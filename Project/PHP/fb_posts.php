<?php
	session_start();
	
	include('connect.php');
echo '<a href="logout.php">Log Out</a>';
$read_query = "SELECT * FROM `posts` JOIN `registers` ON `posts`.`first_name` =  `registers`.`id_register`  WHERE `posts`.`date_deleted` IS NULL";
$result = mysqli_query($conn,$read_query);

if (mysqli_num_rows($result) > 0)
{	echo '<table border=1>';
	while($row = mysqli_fetch_assoc($result))
			{
				echo '<tr>';
				echo '<td>'. $row['first_name'] .'</td>'; 
				echo '<td>'. $row['post_cont'] .'</td>'; 
				echo '<td>'. $row['upload_date'] .'</td>'; 
				//echo '<td>'. '<a href="update_------------.php?--------_id='.$row['-------_id'].'">update</a>' .'</td>';
				//echo '<td>'. '<a href="delete_------------.php?--------_id='.$row['-------_id'].'">delete</a>' .'</td>';// id-to na shushtata tablica
				echo '</tr>';			
				
			}
		echo '</table>';
		
		
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
		
		<form method="POST" action="">
		<div>
			<textarea name="text"></textarea>
		</div>
		<div>
			<input type="file" name="file">
		</div>
		<div>
			<input type="submit" nema="button" value="Send">
		</div>
		</form>
	</body>
</html>
