<?php 
$conn = mysqli_connect('localhost', 'root', '', 'facebook_posts');

// if (!$conn) {
// 	die("Connection failed: " .mysqli_connect_error());
// 	} else {
// 	echo "Connected successfully !";
// 	}
//MIND THAT NOT ALL OF THE HOTELS HAVE INFO ABOUT THE CITIES!!
//lOOK HOW THIS QUERY LOOKS LIKE IN PHPMYADMIN
$q = "SELECT * FROM registers JOIN comments ON id_register=name.comments_id";
$res = mysqli_query($conn, $q);

//or table
echo "<table border=1>";
if (mysqli_num_rows($res) > 0) {

	while($row = mysqli_fetch_assoc($res)){ 
		echo "<tr>";
		echo '<td>'.$row['first_name'].'</td>';
		echo '<td>'.$row['last_name'].'</td>';
		echo '<td>'.$row['email'].'</td>';
		echo '<td>'.$row['password'].'</td>';
		
		//for U D purpose we need update and delete buttons/links
		//we also need $row['id_city'] to know exactly which row of the table to 
		//update or to delete
		echo ' '.'<td><a href="update.php?id='.$row['comments_id'].'">Edit</a></td>';
		echo ' '.'<td><a href="delete.php?id='.$row['comments_id'].'">Delete</a></td>';	
		echo "</tr>";	
	}

}
echo "</table>";