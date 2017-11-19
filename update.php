<?php 

function validateEmail($email)
{
    $len = strlen($email);
    $is_at = false;
    $dot = false;

    for ($i=0; $i < $len; $i++)
    {
        if ($email[$i] == '@')
            $is_at = true;
        if($is_at && $email[$i] == '.')
            $dot = true;
    }

    return ($is_at && $dot);
}

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

if($_SERVER['REQUEST_METHOD'] == "POST") {
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];

	$error=array();

	

	if(empty($email))
	{
		$error['email']="Email can not be empty";
	}
    elseif ( !validateEmail($email) )
        $error['email'] = "Invalid Email !!!";
	
	if(empty($mobile))
	{
		$error['mobile']="Mobile can not be empty";
	}
	if(empty($password))
	{
		$error['password']="Password can not be empty";
	}
		
	if(empty($error))
	{

		// var_dump($_POST); die();
		$sql = "UPDATE users SET email = '$email', mobile = '$mobile', password = '$password' WHERE id = $user_id";
		$conn->exec($sql);
		// $stmt = $conn->prepare($sql);
		// $stmt->execute();
		// var_dump($sql); die();
		header("Location: user.php");
	}
}
include('view/update.view.php');