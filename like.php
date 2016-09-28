<?php

	include("connect.php");
	session_start();

	$UserID = $_SESSION["UserID"];
	$productID = $_POST["likedProductID"];


	$sqlone = "UPDATE product SET nLike = nLike + 1 WHERE IDproduct = '$productID' ";

if(mysqli_query($conn, $sqlone)){
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

	$sql = "INSERT INTO like_db (UserID, ProductID) VALUES 
	('$UserID', '$productID')";

if(mysqli_query($conn, $sql)){
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


$sql = "SELECT * FROM product WHERE IDproduct = '$productID'";
$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["nLike"];
			}
		}



?>