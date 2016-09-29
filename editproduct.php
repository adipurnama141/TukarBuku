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
				<td><a href="addproduct.php?id_active=<?php echo $id ?>"> Add Product </a> </td>
				<td><a href="sales.php?id_active=<?php echo $id ?>"> Sales</a> </td>
				<td><a href="purchases.php?id_active=<?php echo $id ?>"> Purchases</a> </td>
			</tr>
		</table>
		<br>


		<h1>Please update your product here</h1>
		<hr>

		<?php

		$id = $_GET["id_active"];
		$product_ID = $_GET["pid"];

		$sql = "SELECT * FROM product WHERE IDproduct = '$product_ID'  ";
		$result = mysqli_query($conn, $sql);

		$judulbuku;
		$harga;
		$desc;

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {

        		$judulbuku = $row["Title"];
        		$harga = $row["Price"];
        		$desc = $row["Description"];
        }
       }





		?>


		<br>
		<br>
		<div class="inputwrap">
			<form  name="loginForm" onsubmit="return(validateAddProduct());" action="add.php" method="post" enctype="multipart/form-data">
			<label>Name</label><BR>
			<input type="text" name="product_name" value ="<?php echo $judulbuku ?> "></input><BR>

			<label>Description (max 200 chars)</label><BR>
			<textarea name="product_desc"> <?php echo $desc ?> </textarea><br>

			<label>Price (IDR)</label><BR>
			<input type="text" name="price" value =" <?php echo $harga ?> " ></input><BR>

		

			

			<button class="bluebutton s_update" type="submit">UPDATE</button>
			</form>
			<button class="bluebutton s_cancel">CANCEL</button>
		
		</div>


	</div>
</body>
</html>