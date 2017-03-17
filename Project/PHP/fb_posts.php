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
		<form method="POST" action=""  enctype="multipart/form-data">
		<div>
			<textarea name="text"></textarea>
		</div>
		<div>
			<input type="file" name="img"/>
		</div>
		<div>
			<input type="submit" name="submit" value="Send">
		</div>
		</form>
		<a href="logout.php">Log Out</a>
		<?php
			if(isset($_POST['submit'])){
				
				$read_query = "SELECT * FROM `posts` JOIN `registers` ON `posts`.`first_name` =  `registers`.`id_register`  WHERE `posts`.`date_deleted` IS NULL";
				$result1 = mysqli_query($conn,$read_query);
				$first_name= $_POST['fname'];
				
				if($_POST['text'] ="" or $_FILES['img']['name'] =""){
					echo 'You havent typed anything or you havent chose any photo';
				}else{
					if($_POST['text'] !="" && $_FILES['img']['name'] !=""){
						
						$target="../pic/".basename($_FILES['img']['name']);
						$img =$_FILES['img']['name'];
						$post_cont = $_POST['text'];
						$upload_date= date("Y,m,d");
						$query = "INSERT INTO `posts` (`first_name`,`img_path`,`post_cont`,`upload_date`) VALUE ('$first_name','$img','$post_cont','$upload_date')";
						$result = mysqli_query($conn,$query);
						
						/*if(move_uploaded_file($_FILES['img']['tmp_name'], $target)){
							echo 'files uploaded!';
						}else{
							echo 'did not upload the files';
						}*/
						
					}elseif($_POST['text'] !=""){
						
						$post_cont = $_POST['text'];
						$upload_date= date("Y,m,d");
						$query = "INSERT INTO `posts` (`first_name`,`post_cont`,`upload_date`) VALUE ('$first_name','$post_cont','$upload_date')";
						$result = mysqli_query($conn,$query);
						
					}elseif($_FILES['img']['name'] !=""){
						
						$target="../pic/".basename($_FILES['img']['name']);
						$img =$_FILES['img']['name'];
						$upload_date= date("Y,m,d");
						$query = "INSERT INTO `posts` (`first_name`,`img_path`,`upload_date`) VALUE ('$first_name','$img','$upload_date')";
						$result = mysqli_query($conn,$query);
						
						/*if(move_uploaded_file($_FILES['img']['tmp_name'], $target)){
							echo 'files uploaded!';
						}else{
							echo 'did not upload the image';
						}*/
						
					}
				}
			}
		?>
	</body>
</html>