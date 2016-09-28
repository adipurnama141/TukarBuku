<html>

<head>
	<script type="text/javascript" src="validation.js"> </script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>TukarBuku</title>
</head>

<body>
	<div class="wrapper loginregister">
		<img src="logo.png" align="middle">
		<h1>Please Login</h1>

		<?php
			error_reporting(0);
			if($_GET["error"] == 1) {
				echo "<h2>Wrong Combination of Username/Password. Try Again</h2>";
			}

		?>

		<hr><br>
		<div class="inputwrap">
		<form action="login.php" name="loginForm" onsubmit="return(validateLogin());" method="post">
			<label>Email or username</label><BR>
			<input type="text" name="username" ></input><BR>

			<label>Password</label><BR>
			<input type="password" name="password" ></input><BR>

			<button class="bluebutton" type="submit">LOGIN</button><br>
		</form>
		<p> Dont' have an account yet? Register <a href="register"> here </a> </p>
	</div>
	</div>
</body>
</html>

