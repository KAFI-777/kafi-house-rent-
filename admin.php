<?php 

session_start();
if(!isset( $_SESSION['user_type'] ) && $_SESSION['user_type'] != 1) { // check for admin login
	header("Location: index1.php");
}

try {
	$conn = new PDO('mysql:host=localhost;dbname=kafi', "root", "");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	die("ERROR: " . $e->getMessage());
}

$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll();




include('view/admin.view.php');
