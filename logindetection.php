<?php
			#error_reporting(0);
			session_start();
			include("connect.php");
			if( ((isset($_SESSION["UserID"])) == 0) ) {
			}
			else {
				include("connect.php");
				$id = $_SESSION["UserID"];
				$id = $_GET["id_active"];
				$sql = "SELECT Username FROM user WHERE ID = '$id' ";
				$result = mysqli_query($conn, $sql);
				while ( $row = mysqli_fetch_array($result)) {
					echo "<h5> Hi, ". $row['Username'] . "! </h5>";
					echo "<h5> <a href='logout.php'>logout</a> </h5> <br>";
				}
			}

		?>