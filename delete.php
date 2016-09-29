<?php 


	include("connect.php");
	session_start();


	$UserID = $_GET["id_active"];
	$pid = $_GET["pid"];

	$sql = "DELETE FROM product WHERE IDproduct = '$pid'  ";


	if(mysqli_query($conn, $sql)){
	header("Location: myproduct.php?id_active=". $UserID);



} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}




?>