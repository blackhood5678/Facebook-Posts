<?php
					}elseif($img !=""){
						$query = "INSERT INTO `posts` (`uname`,`upload_date`) VALUE ('$uname','$upload_date')";
						mysqli_query($conn,$query) or die (mysqli_error($conn));
						header("Location: insert_img.php");
					}
					if($text !="" && $img !=""){
						$query = "INSERT INTO `posts` (`uname`,`upload_date`) VALUE ('$uname','$upload_date')";
						mysqli_query($conn,$query) or die (mysqli_error($conn));
							$uname = $_SESSION["uname"];
							$upload_date= date("Y,m,d");
							$text = $_POST['text'];
							$target = "../pic/" . basename( $_FILES['img_name']['name']);
							$img =($_FILES['img_name']['name']);
							$_SESSION["insert_img"] = $img;
							$_SESSION["insert_text"]= $text;	
						$query = "INSERT INTO `posts` (`uname`,`upload_date`) VALUE ('$uname','$upload_date')";
						mysqli_query($conn,$query) or die (mysqli_error($conn));	
if($_POST['text'] ="" && $_FILES['img']['name'] =""){
					echo 'You havent typed anything or you havent picked any photo';
				}else{

					if($text !="" && $img !=""){				