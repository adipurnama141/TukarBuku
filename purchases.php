<!DOCTYPE html>
<html>
	<head>
		<title> Purchases </title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
	<div class="wrapper">
		<img src="logo.png" align="center">
		<br>
		<div class=hai> 
			Hi, Someone ! <br>
			Logout 
		</div>
		<br>
		<table class="navbar">
			<tr>
				<td>Catalog</td>
				<td>Your Products</td>
				<td>Add Product</td>
				<td>Sales</td>
				<td class="active">Purchases</td>
			</tr>
		</table>
		<h1>Here are your purchases</h1> <hr> 
		<div class=timefg> 
		<?php
			
			date_default_timezone_set('Asia/Jakarta');
			$tgl=date('l, d-m-Y');
			echo $tgl . "<br>"; 
			echo "at " . date("h:i:s a") . "<hr>";

		?>	
		</div>
	</div>
	
</body>
</html>
