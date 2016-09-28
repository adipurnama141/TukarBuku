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
				<td><a href="catalog.php"> <div style="width:100%;height:100%; color:black !important;">Catalog</div> </a></td>
				<td><a href="myproduct.php"> <div style="width:100%;height:100%; color:black !important;">Your Product</div> </a></td>
				<td class="active">Add Product</td>
				<td><a href="sales.php"> <div style="width:100%;height:100%; color:black !important;">Sales</div> </a> </td>
				<td><a href="purchases.php"> <div style="width:100%;height:100%; color:black !important;">Purchases</div> </a> </td>
			</tr>
		</table>

		<br>
		<br>
		<h1>Please add your product here</h1>
		<hr>
		<br>
		<br>
		<div class="inputwrap">
			<form action="add.php" method="post" enctype="multipart/form-data">
			<label>Name</label><BR>
			<input type="text" name="product_name"></input><BR>

			<label>Description (max 200 chars)</label><BR>
			<textarea name="product_desc"></textarea><br>

			<label>Price (IDR)</label><BR>
			<input type="text" name="price"></input><BR>

			<label>Photo</label><BR>
			<input type="file" name="photo" id="photo" ></input><BR>

			

			<button class="bluebutton s_update" type="submit">UPDATE</button>
			</form>
			<button class="bluebutton s_cancel">CANCEL</button>
		
		</div>


	</div>
</body>
</html>