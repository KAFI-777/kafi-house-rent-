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

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	$type = $_POST['type'];
	// var_dump($_POST); die();

$error=array();

if(empty($name))
{
	$error['name']="Name can not be empty";
}

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
	try {
		$conn = new PDO('mysql:host=localhost;dbname=kafi', "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		die("ERROR: " . $e->getMessage());
	}

	if($type == 'admin') { // It's the Admin registration 
		$sql = "INSERT INTO users (name, email, password, mobile, user_type) VALUES('$name', '$email', '$password', '$mobile', 1)";
	} 
	else { // Normal Users 
		$sql = "INSERT INTO users (name, email, password, mobile, user_type) VALUES('$name', '$email', '$password', '$mobile', 2)";
	}

	$stmt = $conn->prepare($sql);
	// $bind = [
	// 	':email'		=> $email,
	// 	':password'		=> $password,
	// 	':name'			=> $name,
	// 	''
	// ];
	$stmt->execute();
	header("Location: admin.php");
}
}



include('view/new_user.view.php');
