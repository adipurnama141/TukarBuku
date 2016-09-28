<?php

include("connect.php");
session_start();

$IDproduct = $_POST["productID"];
$IDuser = $_SESSION["UserID"];
$qty = $_POST["qty"];
$consignee = $_POST["consignee"];
$address = $_POST["address"];
$postal = $_POST["postal_code"];
$phone = $_POST["phone_number"];
$CCN =$_POST["card_number"];
$CVV =$_POST["card_verification"];



$sqlone = "UPDATE product SET nPurchase = nPurchase + 1 WHERE IDproduct = '$IDproduct' ";

if(mysqli_query($conn, $sqlone)){
    echo "Records added successfully. last_ID : ";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


$sql = "INSERT INTO purchase (IDuser, IDproduct, Qty, Consignee, Address , Postal , Phone, CCN, CVV) VALUES 
('$IDuser', '$IDproduct', '$qty' , '$consignee', '$address' , '$postal' , '$phone' , '$CCN' , '$CVV')";


if(mysqli_query($conn, $sql)){
    echo "Records added successfully. last_ID : ";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>