<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>TukarBuku</title>
</head>

<body>
	<div class="wrapper catalog">
		<img src="logo.png" align="middle">
		

		<?php include("logindetection.php"); ?>

		<table class="navbar">
			<tr>
				<td class="active"><a href="catalog.php"> <div style="width:100%;height:100%; color:black !important;">Catalog</div> </a></td>
				<td><a href="myproduct.php"> <div style="width:100%;height:100%; color:black !important;">Your Product</div> </a></td>
				<td><a href="addproduct.php"> <div style="width:100%;height:100%; color:black !important;">Add Product</div> </a></td>
				<td><a href="sales.php"> <div style="width:100%;height:100%; color:black !important;">Sales</div> </a> </td>
				<td><a href="purchases.php"> <div style="width:100%;height:100%; color:black !important;">Purchases</div> </a> </td>
			</tr>
		</table>