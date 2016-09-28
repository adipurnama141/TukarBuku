<?php

include("connect.php");

function isValidEmail($email){ 
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

$username = $_POST["username"];
$password = $_POST["password"];

echo $username;
echo $password;

global $sql;

if (isValidEmail($username)) {
	$sql = "SELECT ID FROM user WHERE Email = '$username' and Password = '$password' ";
}
else  {
	$sql = "SELECT ID FROM user WHERE Username = '$username' and Password = '$password' ";
}



$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);


if($count == 1) {
	echo "sukses!";
	session_start();
	$UserID = 0;
	while ( $row = mysqli_fetch_array($result)) {
		$UserID = $row['ID'];
	}
	echo "user id kamu" . $UserID;
	$_SESSION["UserID"] = $UserID;
	header("Location: catalog.php");
	die();

}
else {
	echo "fail!";
	echo $count;
	#header("Location: index.php?error=1");
	die();
}








?>