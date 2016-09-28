
<html>

<head>
	<script type="text/javascript" src="../validation.js"></script>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<title>TukarBuku</title>
</head>

<body>
	<div class="wrapper loginregister">
		<div class="inputwrap">
		<img src="../logo.png" align="middle"> 
		<h1>Please Register</h1>
		<?php
			error_reporting(0);
			if($_GET["error"] == 1) {
				echo "<h2>Username is already registered. Try Again</h2>";
			}

			else if ($_GET["error"] == 2) {
				echo "<h2>Email is already registered. Try Again</h2>";
			}

		?>
		<hr><br>
		<form action="../register.php" name="loginForm" method="post" onsubmit="return(validateRegister());"  >
			<label>Full Name</label><BR>
			<input type="text" name="fullname" ></input><BR>	

			<label>Username</label><BR>
			<input type="text" name="username" ></input><BR>

			<label>Email</label><BR>
			<input type="text" name="email" ></input><BR>

			<label>Password</label><BR>
			<input type="password" name="password"  ></input><BR>

			<label>Confirm Password</label><BR>
			<input type="password" name="password2"></input><BR>

			<label>Full Address</label><BR>
			<textarea name="address" ></textarea>

			<label>Postal Code</label><BR>
			<input type="text" name="postal" ></input><BR>

			<label>Phone Number</label><BR>
			<input type="text" name="phone" ></input><BR>

			<button class="bluebutton" type="submit">REGISTER</button><br>
		</form>
		<p> Already registered? Login <a href="login.html"> here </a> </p>
	</div>
	</div>
</body>
</html>