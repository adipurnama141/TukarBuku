<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>TukarBuku</title>
	<script type="text/javascript">
    function confirmation() {
    	return confirm("Apa Anda yakin ingin menghapus produk ini?");
    }
</script>
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
				<td><a href="purchases.php?id_active=<?php echo $id ?>" class="active"> Purchases</a> </td>
			</tr>
		</table>
		<br>

		<h1>Here are your purchases</h1>
		<hr>
		<br>
		<br>

		<?php
		include("connect.php");
		$sql = "SELECT * FROM product,user,purchase 
		WHERE purchase.IDuser = '$id' AND purchase.IDproduct = product.IDproduct AND product.IDuser = user.ID  ORDER BY product.Timestamp DESC";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {

        		#echo  $row["Title"]. "#". $row["Price"]. " " . $row["Description"]. "<br>";

        		$hari = date("l", strtotime($row["Timestamp"]));
        		$tanggal = date("j F Y", strtotime($row["Timestamp"]));
        		$jam = date("G:i", strtotime($row["Timestamp"]));
        		
        		$productID = $row["IDproduct"];
     
        		$nama = $row["Username"];
        		$timephrase = $hari . ", " . $tanggal;
        		$timephrase2 = "at " .  $jam;

        		$judulbuku = $row["Title"];
        		$harga = "IDR " . number_format($row["Price"], 0, ',', '.');
        		$desc = $row["Description"];

        		$nLike = $row["nLike"];
        		$nPurchase = $row["nPurchase"];

        		$imgurl = "<img src='img/" . $productID . ".png'>";
        		#echo "PID : ". $productID;

        		$likeurl = '<div onclick="likeAJAX(this)"" class="likebuybutton like editbutton"  id="'. $productID.'"> EDIT </div> ';
      
        		$purchaseurl = "<a class='_b' onclick= 'return confirmation()'  href='delete.php?id_active=".$id ."&pid=" . $productID . "'> <div class='likebuybutton buy deletebutton'> DELETE </div> </a>";        		

        ?>


        <br>
		<div class="book">
		<h5><?php echo $timephrase; ?></h5>
		<?php echo $timephrase2; ?>
		<hr>
		<table>
			<tr>
				<td style="width:20%"> <?php echo $imgurl; ?>  </td>
				<td style="width:60%"> <h2><b> <?php echo $judulbuku; ?> </b></h2>	
					 <?php echo $harga; ?><br>
					 <?php echo $desc; ?>
				</td>
				<td> <?php echo $nLike; ?> Likes <br> <?php echo $nPurchase; ?> purchases 
				<table class="twobutton">
					<tr>
						<td> <?php echo $likeurl; ?> </td>
						<td> <?php echo $purchaseurl; ?>  </td>
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