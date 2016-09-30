<?php

include("connect.php");

$fullname = $_POST["fullname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$address = $_POST["address"];
$postal = $_POST["postal"];
$phone = $_POST["phone"];


$sqlcheck = "SELECT ID FROM user WHERE  Username = '$username'";
if ($result = mysqli_query($conn,$sqlcheck)){
	$rowcount = mysqli_num_rows($result);
	if ($rowcount == 1) {
		header("Location: register/index.php?error=1");
	} 
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$sqlcheck = "SELECT ID FROM user WHERE  Email = '$email'";
if ($result = mysqli_query($conn,$sqlcheck)){
	$rowcount = mysqli_num_rows($result);
	if ($rowcount == 1) {
		header("Location: register/index.php?error=2");
	} 
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}





$sql = "INSERT INTO user (FullName, Username, Email, Password, Address, PostalCode, PhoneNumber) VALUES 
('$fullname', '$username', '$email' , '$password' , '$address', '$postal' , '$phone')";

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
    session_start();
    
    $_SESSION["UserID"] = mysqli_insert_id($conn);
    $UserID = mysqli_insert_id($conn);
    header("Location: catalog.php?id_active=". $UserID);
	die();


} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>