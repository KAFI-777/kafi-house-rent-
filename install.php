<?php 

try {
	$conn = new PDO('mysql:host=localhost;dbname=kafi', "root", "sukkumia");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	die("ERROR: " . $e->getMessage());
}

$sql = "CREATE TABLE users (id INT AUTO_INCREMENT PRIMARY KEY, name varchar(255) NOT NULL, email varchar(255) NOT NULL, mobile varchar(255) NOT NULL, password varchar(255) NOT NULL, user_type INT )";
$conn->exec($sql);

$sql = "CREATE TABLE user_rent (id INT AUTO_INCREMENT PRIMARY KEY, user_id INT NOT NULL, house_rent INT, current_bill INT, gas_bill INT, water_bill INT, additional_bill INT, month varchar(255) NOT NULL )";
$conn->exec($sql);

$sql = "INSERT INTO users (name, email, password, mobile, user_type) VALUES('admin', 'admin@admin.com', '123456', '10101010101', 1)";

$conn->exec($sql);
