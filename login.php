<!DOCTYPE html>
<html>
<head>
	<title>Login Panel</title>
	    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.right {
			margin-top: 100px;
			float: right;
		}
	</style>
</head>
<body style="background-color: #34e3f1;">

	<div class="container">
	 <h1> Enter Credentials: </h1> 
		<?php if( isset($error) ) : ?>
			<div class="alert alert-danger">
				<ul>
					<li><?php echo $error; ?></li>
				</ul>
			</div>
		<?php endif; ?>
		<form action="" method="post">
			<div class="form-group">
				<label for="email">Email: </label>
				<input type="text" class="form-control" name="email" id="email" value="">
			</div>
			<div class="form-group">
				<label for="password">Password: </label>
				<input type="password" class="form-control" name="password" id="password">
			</div>
			<button class="btn btn-primary">Login</button>
			

		</form>
	</div>


</body>
</html>