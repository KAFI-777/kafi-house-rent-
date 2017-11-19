<?php 
session_start();



if($_SERVER['REQUEST_METHOD'] == 'POST') {
	

	$email = $_POST['email'];
	$password = $_POST['password'];
	// var_dump($_POST);
	
		try {
		$conn = new PDO('mysql:host=localhost;dbname=kafi', "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			die("ERROR: " . $e->getMessage());
		}

		$sql = "SELECT * FROM users WHERE email = :email and password = :password";
		$stmt = $conn->prepare($sql);
		$bind = [
			':email'		=> $email,
			':password'		=> $password
		];
		$stmt->execute($bind);
		$result = $stmt->fetch();
		if($result == false){
			$error = "Email or Password didn't match in our database";
		}
		else {
			$_SESSION['user_id'] = $result['id'];
			$_SESSION['email'] = $email;
			$_SESSION['name'] = $result['name'];
			$_SESSION['user_type'] = $result['user_type'];
			if($result['user_type'] == 1) { // Holy shit it's an admin
				return header("Location: admin.php");
			} 
			else { // Meh, its a mamu 
				return header("Location: user.php");
			}
		}
	
	
	// var_dump($is_valid);
	
		
	
	
}



include('view/index.view.php');
