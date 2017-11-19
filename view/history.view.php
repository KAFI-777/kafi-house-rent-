<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Page</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<br><br><br>
	<h2>User: <?php echo $user['name']; ?> </h2>
	<p><strong>Email: <?php echo $user['email']; ?></strong></p>
	<p><strong>Mobile: <?php echo $user['mobile']; ?></strong></p>
	<br>
	<h3>Previous History: </h3>
	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>Month</th>
			<th>House Rent</th>
			<th>Current Bill</th>
			<th>Gas Bill</th>
			<th>Water Bill</th>
			<th>Additional Bill</th>
		</tr>
		<?php foreach($results as $data) : ?>
			<tr>
				<td><?php echo $data['id']; ?></td>
				<td><?php echo $data['month']; ?></td>
				<td><?php echo $data['house_rent']; ?></td>
				<td><?php echo $data['current_bill']; ?></td>
				<td><?php echo $data['gas_bill']; ?></td>
				<td><?php echo $data['water_bill']; ?></td>
				<td><?php echo $data['additional_bill']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>

</body>
</html>
