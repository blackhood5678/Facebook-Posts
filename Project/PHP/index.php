<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../Styles/style1.css"> 
		<title>Facebook Posts</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	</head>
	<body>
		<header>
			<div id="Facebook_Posts">Facebook Posts</div>
			<form id="form1" method="post" action="login.php">
				<input type="text" name="uname" placeholder="Username"/>
				<input type="password" name="pass" placeholder="Password"/>
				<input id="button1" type="submit" name="submit" value="Log In"/>
			</form>
		</header>
		<div id="php">
			<?php
			if(isset($_SESSION['id'])){
				header("Location: fb_posts.php");
			}else{
				echo 'You are not logged in!';
			}
			?>
		</div>
		<section>
			<div id="btext">Thanks for stopping by!</div>
			<div id="ntext">We hope to see you again soon.</div>
			<form id="form2" method="post" action="sign_up.php">
				<input class="form_text" type="text" name="uname" placeholder="Username"/>
				<p></p>
				<input class="form_text" type="email" name="email" placeholder="E-mail"/>
				<p></p>
				<input class="form_text" type="password" name="pass" placeholder="Password"/>
				<p></p>
				<input class="form_text" type="text" name="number" placeholder="Phone number"/>
				<p></p>
				<h2>Birthday</h2>
				<p></p>
				<select name="month">
					<option value="">month</option>
					<option value="01">January</option>
					<option value="02">February</option>
					<option value="03">March</option>
					<option value="04">April</option>
					<option value="05">May</option>
					<option value="06">June</option>
					<option value="07">July</option>
					<option value="08">August</option>
					<option value="09">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
				<select name="day">
					<option value="">day</option>
					<?php
						for($i=1;$i<32;$i++){
							if($i<10){
								echo '<option value="0'.$i.'">'.$i.'</option>';
							}else{
								echo '<option value="'.$i.'">'.$i.'</option>';
							}
						}
					?>
				</select>
				<select name="year">
					<option value="">year</option>
					<?php
						for($i=1920;$i<2011;$i++){
							echo '<option value="'.$i.'">'.$i.'</option>';
						}
					?>
				</select>
				<p></p>
				<label for="male">Male</label>
				<input id="male" type="radio" name="gender"/>
				<label for="female">Female</label>
				<input id="female" type="radio" name="gender"/>
				<p></p>
				<div id="text2">
					By clicking Sign Up, you agree to our <a href="https://www.facebook.com/legal/terms">Terms</a> and that you have read <br/>
					our <a href="https://www.facebook.com/about/privacy">Data Policy</a>, including our <a href="https://www.facebook.com/policies/cookies/">Cookie Use</a>. You may receive SMS Notifications <br/>
					from Facebook and can opt out at any time.<br/>
				</div>
				<p></p>
				<input class="btn btn-success"  id="btn1" type="submit" name="submit" value="Sign Up"/>
			</form>
			<img src="../pic/pic_name.png" alt="pic1"/>
			<div id="h1">Sign Up</div>
			<div id="h2">It's free and always will be.<div>
		</section>
		
	</body>
</html>