<?php 

$user_id = $_GET['user'];

try {
	$conn = new PDO('mysql:host=localhost;dbname=kafi', "root", "");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	die("ERROR: " . $e->getMessage());
}

$sql = "DELETE FROM users WHERE id = $user_id";
$stmt = $conn->prepare($sql);
$stmt->execute();

header("Location: admin.php");