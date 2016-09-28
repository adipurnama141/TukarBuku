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
				<td class="active">Catalog</td>
				<td><a href="myproduct.php"> <div style="width:100%;height:100%; color:black !important;">Your Product</div> </a> </td>
				<td><a href="addproduct.php"> <div style="width:100%;height:100%; color:black !important;">Add Product</div> </a> </td>
				<td><a href="sales.php"> <div style="width:100%;height:100%; color:black !important;">Sales</div> </a> </td>
				<td><a href="purchases.php"> <div style="width:100%;height:100%; color:black !important;">Purchases</div> </a> </td>
			</tr>
		</table>


		<br>
		<h1>What are you going to buy today?</h1>
		<hr>

		<form action="search.php" method="post" >
		<table class="search">
			<tr>
				
				<td class="stext inputwrap" ><input type="text" class="searchquery" name="search" placeholder="Search catalog ..."></input></td>
				<td><button class="sbutton" type="submit">SEARCH</button><br>
				
			</tr>

			<tr>
				<td>By &ensp;&ensp;&ensp;&ensp;
				<input type="radio" name="Type" value="Product" checked>Product<br>
				 <p class="hiddentext">By &ensp;&ensp;&ensp;&ensp;</p>
  				<input type="radio" name="Type" value="Store">Store<br>
		</table>
	</form>
			
		<br>


		<?php
		include("connect.php");
		$sql = "SELECT * FROM product,user WHERE user.ID = product.IDUser  ORDER BY product.Timestamp DESC";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {

        		#echo  $row["Title"]. "#". $row["Price"]. " " . $row["Description"]. "<br>";

        		$hari = date("l", strtotime($row["Timestamp"]));
        		$tanggal = date("j F Y", strtotime($row["Timestamp"]));
        		$jam = date("G:i", strtotime($row["Timestamp"]));
        		
        		$productID = $row["IDproduct"];
     
        		$nama = $row["Username"];
        		$timephrase = "added this on ". $hari . ", " . $tanggal . ", at " . $jam;

        		$judulbuku = $row["Title"];
        		$harga = $row["Price"];
        		$desc = $row["Description"];

        		$nLike = $row["nLike"];
        		$nPurchase = $row["nPurchase"];

        		$imgurl = "<img src='img/" . $productID . ".png'>";
        		$purchaseurl = "<a class='_b'  href='confirmpurchase.php?pid=" . $productID . "'> BUY </a>";
        		#echo "PID : ". $productID;


        ?>


        <br>
		<div class="book">
		<h5><?php echo $nama; ?></h5>
		<?php echo $timephrase; ?>
		<hr>
		<table>
			<tr>
				<td style="width:20%"> <?php echo $imgurl; ?>  </td>
				<td style="width:65%"> <h2><b> <?php echo $judulbuku; ?> </b></h2>	
					 <?php echo $harga; ?><br>
					 <?php echo $desc; ?>
				</td>
				<td> <?php echo $nLike; ?> Likes <br> <?php echo $nPurchase; ?> purchases 
				<table class="twobutton">
					<tr>
						<td class="_l">LIKE</td>
						<td> <?php echo $purchaseurl; ?> </td>
					</tr>
				</table>
				</td>
			</tr>
		</table>
		</div>
		<hr>

		<br>
		<br>



		<?php
			}
		}
		else {
			echo "<h1> No results found...</h1>";
		}
		?>

		



		

	</div>
</body>
</html>