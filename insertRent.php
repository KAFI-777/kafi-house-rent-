<!DOCTYPE html>
<html>
<head>
    <title> Rent </title>
    
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
        <h3>Insert Rent</h3>

        <form action="" method="POST">
          

            <div class="form-group">
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" class="form-control" value="<?php if(isset($_POST["username"])){echo  $_POST["username"];} ?>" ><br>
                <?php if( isset($error['username']) ) {
                    echo $error['username'];
                } ?>
            </div>
            <div class="form-group">
                <label for="houserent">House Rent: </label>
                <input type="houserent" name="houserent" id="houserent" class="form-control" value="<?php if(isset($_POST["houserent"])){echo $_POST["houserent"];} ?>" ><br>
                <?php if( isset($error['houserent']) ) {
                    echo $error['houserent'];
                } ?>
            </div>
            <div class="form-group">
                <label for="pmeter">Previous Meter Reading: </label>
                <input type="text" name="pmeter" id="pmeter" class="form-control" value="<?php if(isset($_POST["pmeter"])){echo $_POST["pmeter"];} ?>" ><br>
                <?php if( isset($error['pmeter']) ) {
                    echo $error['pmeter'];
                } ?>
            <div class="form-group">
                <label for="cmeter">Current Meter Reading: </label>
                <input type="text" name="cmeter" id="cmeter" class="form-control" value="<?php if(isset($_POST["cmeter"])){echo $_POST["cmeter"];} ?>" ><br>
                <?php if( isset($error['cmeter']) ) {
                    echo $error['cmeter'];
                } ?>
            </div>

            <div class="form-group">
                <label for="unitprice">Per Unit Taka: </label>
                <input type="text" name="unitprice" id="unitprice" class="form-control" value="<?php if(isset($_POST["unitprice"])){echo $_POST["unitprice"];} ?>" ><br>
                <?php if( isset($error['unitprice']) ) {
                    echo $error['unitprice'];
                } ?>
            </div>   
            
            <div class="form-group">
                <label for="gasbill">Gas Bill: </label>
                <input type="text" name="gasbill" id="gasbill" class="form-control" value="<?php if(isset($_POST["gasbill"])){echo $_POST["gasbill"];} ?>" ><br>
                <?php if( isset($error['gasbill']) ) {
                    echo $error['gasbill'];
                } ?>
            </div>

            <div class="form-group">
                <label for="waterbill">Water Bill: </label>
                <input type="text" name="waterbill" id="waterbill" class="form-control" value="<?php if(isset($_POST["waterbill"])){echo $_POST["waterbill"];} ?>" ><br>
                <?php if( isset($error['waterbill']) ) {
                    echo $error['waterbill'];
                } ?>
            </div>  

            <div class="form-group">
                <label for="addbill">Additional Bill: </label>
                <input type="text" name="addbill" id="addbill" class="form-control" value="<?php if(isset($_POST["addbill"])){echo $_POST["addbill"];} ?>" ><br>
                <?php if( isset($error['addbill']) ) {
                    echo $error['addbill'];
                } ?>
            </div>



            <div class="form-group">
                <button class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>


</body>
</html>
