<script type="text/javascript" src="pricecalculate.js"></script>
<script type="text/javascript">
    function confirmation() {
    	return confirm("Apakah data yang Anda masukan benar?");
    }
</script>
<?php 

	include("header.php"); 
	include("connect.php");

	$product_ID = $_GET["pid"];

		$sql = "SELECT * FROM product,user WHERE IDproduct = '$product_ID'  ";
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

        }
       }


?>


		<br>
		<h1>Please confirm your purchase</h1>
		
		<span id="hargabuku" style="display:none;"> <?php echo $harga ?> </span>

		<form action="purchase.php" method="post"  	>
		
		<table>
			<tr> 
				<td><h2> Product </td>
				<td><h2> : <?php echo $judulbuku ?>  </h2> </td> 
			</tr>
			<tr> 
				<td><h2> Price </td>
				<td><h2> : IDR <span id="hargabuku_formatted">  </span>  </h2> </td> 
			</tr>
			<tr> 
				<td><h2> Quantity </td>
				<td><h2> : <input type="text" name ="qty" id="qty" value="1" oninput="calculatePrice()"></input> pcs  </h2> </td> 
			</tr>
			<tr> 
				<td><h2> Total Price </td>
				<td><h2> : IDR <span id="hargatotal"></span> </h2> </td> 
			</tr>
			<tr> 
				<td><h2> Delivery To </td>
				<td><h2> :  </td> 
			</tr>

			
		</table>



		<div class="inputwrap">


			
				<?php echo ' <input type="text" name="productID" style="display:none;" value = "' . $product_ID . '"></input> ' ; ?>
		

				<label>Consignee</label><BR>
				<input type="text" name="consignee"></input><br>

				<label>Full Address</label><BR>
				<textarea name="address"></textarea><br>

				<label>Postal Code</label><BR>
				<input type="text" name="postal_code"></input><br>

				<label>Phone Number</label><BR>
				<input type="text" name="phone_number"></input><br>
				
				<label>12 Digits Credit Card Number</label><br>
				<input type="text" name="card_number"></input><br>

				<label>3 Digits Card Verification Value</label><br>
				<input type="text" name="card_verification"></input><br>

				<button class="bluebutton s_update" onclick="return confirmation()" type="submit">CONFIRM</button>
			</form>
			<a href="catalog.php"><button class="bluebutton s_cancel">CANCEL</button></a>
		</div>

	</div>
</body>
</html>