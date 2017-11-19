<?php 
session_start();

if(!isset($_SESSION['user_id'])) {
	header("Location: index1.php");
}

$user_id = $_SESSION['user_id'];		

try {
	$conn = new PDO('mysql:host=localhost;dbname=kafi', "root", "");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	die("ERROR: " . $e->getMessage());
}

$sql = "SELECT * FROM users WHERE id = $user_id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$user = $stmt->fetch();

$sql = "SELECT * FROM user_rent WHERE user_id = $user_id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();




include('view/user.view.php');





