<?php
include("connect.php");
session_start();
$target_dir = "img/";
if (isset($_FILES["photo"]["name"])){
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$imageFileType = "png";


$name 	= $_POST['txtName'];
$desc	= $_POST['txtDes'];
$price	= $_POST['txtPrice'];
$productID = $_SESSION['prodid'];
$uploaderID = $_SESSION["UserID"];
$id = $_SESSION["UserID"];

$sql = "UPDATE product set title = '$name', description = '$desc', price = '$price' where IDuser = '$id' and IDproduct = '$productID'" ;
$uploadOk = 1;

if($imageFileType != "png") {
    echo "Sorry PNG files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk){
	if(mysqli_query($conn, $sql)){
		$last_id = mysqli_insert_id($conn);
		$dir = $target_dir . $productID . "." . $imageFileType;

	    echo "Records added successfully. last_ID : " . $last_id . $dir;

	    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $dir)) {
	        echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	} else{
	    echo "ERROR: Could not able to execute $sql. " ;
	}
}
} else{
	echo "something wrong with the code";
}


?>