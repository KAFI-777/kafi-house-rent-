<?php 

$user_id = $_GET['user'];
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$houseRent = $_POST['house'];
	$prevMeter = (int)$_POST['prev'];
	$currentMeter = (int)$_POST['current'];
	$perUnit = (int)$_POST['perunit'];
	$gasBill = $_POST['gas'];
	$waterBill = $_POST['water'];
	$additional = $_POST['additional'];
	$currentBill = ($currentMeter - $prevMeter) * $perUnit;
	$month = $_POST['month'];
	// var_dump($user_id); die();

	$error=array();
	if(empty($houseRent))
	{
		$error['houserent']="House Rent Cannot Be Empty";
	}

	if(empty($prevMeter))

	{
		$error['pmeter']="Previous Meter Reading Can not be Empty";
	}

	if(empty($currentMeter))
	{
		$error['cmeter']="Current Meter Reading Can not be Empty";
	}	
	if(empty($perUnit))
	{
		$error['unitprice']="Unit Price Can not be Empty";
	}
	if(empty($gasBill))
	{
		$error['gasbill']="Gas Bill Can not be Empty";
	}
	if(empty($waterBill))
	{
		$error['waterBill']="Water Bill Can not be Empty";
	}
	if($prevMeter>$currentMeter)
	{
		$error['pmeter']="Previous Meter Reading Can not be greater than current meter reading";
	}
 // var_dump($_POST);die();
	if(empty($error))
	{
		try {
			$conn = new PDO('mysql:host=localhost;dbname=kafi', "root", "");
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			die("ERROR: " . $e->getMessage());
		}

		$sql = "INSERT INTO user_rent (user_id, house_rent, current_bill, gas_bill, water_bill, additional_bill, month) VALUES('$user_id', '$houseRent', '$currentBill', '$gasBill', '$waterBill', '$additional', '$month')";
		$stmt = $conn->prepare($sql);
		$stmt->execute();

		header("Location: admin.php");
	}
}




include('view/bill.view.php');
