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
	<a href="logout.php" class="btn btn-danger pull-right">Logout</a>
	<a href="new_user.php" class="btn btn-primary">New User</a>

	<h2>All Users: </h2>
	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile No.</th>
			<th>Add New rent</th>
			<th>All Rents</th>
			<th>Delete</th>
		</tr>
		<?php foreach($users as $user) : ?>
			<tr>
				<td><?php echo $user['id']; ?></td>
				<td><?php echo $user['name']; ?></td>
				<td><?php echo $user['email']; ?></td>
				<td><?php echo $user['mobile']; ?></td>
				<td><a href="bill.php?user=<?php echo $user['id']; ?>" class="btn btn-primary align-center">New Rent</a></td>
				<td><a href="history.php?user=<?php echo $user['id']; ?>" class="btn btn-primary align-center">History</a></td>
				<td><a href="delete.php?user=<?php echo $user['id']; ?>" class="btn btn-primary align-center">Delete</a></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>

</body>
</html>
