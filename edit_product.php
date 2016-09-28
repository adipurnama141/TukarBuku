<!DOCTYPE html>	
<html>
	<head>
		<title> Edit Product </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="js/javascript.js"></script>
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
				<td>Purchases</td>
			</tr>
		</table>
		<h1> Please update your product here </h1> <hr>
		<form action="#" method="post">
				<label> Name </label> <br> 
				<input type=text name="txtName" size=86> <br> <br>
				<label> Description </label> <br> 
				<div class="teksarea">
					<textarea name="txtDes" rows="6" cols="60" maxlength="200"></textarea>
				</div>
				<label> Price (IDR) </label> <br>
				<input type=text name="txtPrice" size=86 onkeypress="return onlyNum(event)"> <br> <br>
				<label> Photo </label> <br>
				<input type=file name="pict" accept="image/*"> <br> <br> <br>
				<button class="buttonfg" type="submit">Update</button>
				<button class="buttonfg" type="submit">Cancel</button>
		</form>
	</div>
</body>
</html>