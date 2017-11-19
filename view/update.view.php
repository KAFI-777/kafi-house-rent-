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
	

	<br>
<div class="row">	
	<form action="" method="post">	
		         <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" class="form-control" value="<?php echo $user['email']; ?>" ><br>
                <?php if( isset($error['email']) ) {
                    echo $error['email'];
                } ?>
                </div>
            <div class="form-group">
                <label for="mobile">Mobile Number: </label>
                <input type="text" name="mobile" id="mobile" class="form-control" value="<?php echo $user['mobile']; ?>" ><br>
                <?php if( isset($error['mobile']) ) {
                    echo $error['mobile'];
                } ?>
                </div>

                			            <div class="form-group">
                <label for="password">Password: </label>
                <input type="text" name="password" id="password" class="form-control" value="<?php echo $user['password']; ?>"><br>
                <?php if( isset($error['password']) ) {
                    echo $error['password'];
                } ?>
            </div>	
			
			<input type="submit" name="submit" value="Update" class="btn btn-danger">
		</div>
	</form>
	</div>
</div>

</body>
</html>
