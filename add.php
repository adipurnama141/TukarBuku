<?php


include("connect.php");
session_start();

$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$imageFileType = "png";

$product_name = $_POST["product_name"];
$product_desc = $_POST["product_desc"];
$price = $_POST["price"];
$uploaderID = $_SESSION["UserID"];

$sql = "INSERT INTO product (Title, Price, Description,IDuser, nLike, nPurchase) VALUES 
('$product_name', '$price', '$product_desc' , '$uploaderID', 0 , 0)";

if(mysqli_query($conn, $sql)){
	$last_id = mysqli_insert_id($conn);
	$dir = $target_dir . $last_id . "." . $imageFileType;

    echo "Records added successfully. last_ID : " . $last_id . $dir;

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $dir)) {
        echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }


	header("Location: myproduct.php?id_active=". $uploaderID);
	die();



} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}






?>