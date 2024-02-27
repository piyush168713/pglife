<?php
session_start();
require "includes/database_connect.php";

$accountNumber = $_POST['accountNumber'];
$ifscCode = $_POST['ifscCode'];
$email = $_POST['email'];



$sql = "UPDATE users SET accountNumber = '$accountNumber', ifscCode= '$ifscCode' WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (!$result) {
	$response = array("success" => false, "message" => "Something went wrong!");
	echo json_encode($response);
	return;
}

$response = array("Your profile has been updated successfully! just go back and relode the page");
echo json_encode($response);
mysqli_close($conn);
