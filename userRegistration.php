<!DOCTYPE html>
<html>
<head>
    <title> Registration </title>
    
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <style type="text/css">
       .container h3 {
    text-align: center;
}

.container {
    margin: 100px auto;
    width: 600px;
}

button {
    margin-top: 20px;
}
body {
   background-color: #34f1cc;  
}
.right{
    float: right;
}    

   </style>
</head>
<body>
    
    <div class="container">
        <h3>Registration Form</h3>

        <form action="" method="POST">
          
            <div class="form-group">
                <label for="name">Full Name: </label>
                <input type="text" name="name" class="form-control" id="name" value="<?php if(isset($_POST["name"])){echo $_POST["name"];} ?>" ><br>

                <?php if( isset($error['name']) ) {
                    echo $error['name'];
                } ?>
            </div>
            <div class="form-group">
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" class="form-control" value="<?php if(isset($_POST["username"])){echo  $_POST["username"];} ?>" ><br>
                <?php if( isset($error['username']) ) {
                    echo $error['username'];
                } ?>
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" class="form-control" value="<?php if(isset($_POST["email"])){echo $_POST["email"];} ?>" ><br>
                <?php if( isset($error['email']) ) {
                    echo $error['email'];
                } ?>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number: </label>
                <input type="text" name="mobile" id="mobile" class="form-control" value="<?php if(isset($_POST["mobile"])){echo $_POST["mobile"];} ?>" ><br>
                <?php if( isset($error['mobile']) ) {
                    echo $error['mobile'];
                } ?>
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" class="form-control" ><br>
                <?php if( isset($error['password']) ) {
                    echo $error['password'];
                } ?>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Register</button>
            </div>


        </form>
    </div>


</body>
</html>
