<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="validation.js"></script>
	<title>TukarBuku</title>
</head>

<body>
	<div class="wrapper catalog">
		<img src="logo.png" align="middle">
		

		<?php include("logindetection.php"); ?>

		<table class="navbar">
			<tr>
				<td > <a href="catalog.php?id_active=<?php echo $id ?>" > Catalog </a> </td>
				<td><a href="myproduct.php?id_active=<?php echo $id ?>" > Your Product  </a> </td>
				<td><a href="addproduct.php?id_active=<?php echo $id ?>" class="active"> Add Product </a> </td>
				<td><a href="sales.php?id_active=<?php echo $id ?>"> Sales</a> </td>
				<td><a href="purchases.php?id_active=<?php echo $id ?>"> Purchases</a> </td>
			</tr>
		</table>
		<br>


		<h1>Please add your product here</h1>
		<hr>
		<br>
		<br>
		<div class="inputwrap">
			<form  name="loginForm" onsubmit="return(validateAddProduct());" action="add.php" method="post" enctype="multipart/form-data">
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