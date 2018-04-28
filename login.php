    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.min.css" />
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.js"></script>
    </head>
    <body>
 <!-- Opening the container div -->
    <div class="container">
<!-- row -->
    <div class="row">
      <!-- col-md-6 opening -->
    <div class="col-md-6 offset-md-3">
<h1>Login to your account</h1>
<?php
//check if user has sent a post request
if(isset($_POST)){
    //defining the variables 
$email=$_POST['email'];
$password=$_POST['password'];

//check  for empty fields
if(empty($email) || empty($password)){
    //if email is empty or password is empty display error
echo  "<div class='alert alert-danger'>Please enter your email and password</div>";
}else{
//else run the login process
//connect to database
    $mysql = mysqli_connect("localhost","sammy","","codespark") or die("Error Connecting to Database");
//check for exisitng email and password
$sql="SELECT  `email` , `password` FROM `profile` WHERE email='{$email}' and password='{$password}'";
//run sql query
$run_sql=mysqli_query($mysql,$sql);
//count number of results
if(mysqli_num_rows($run_sql) == "1"){
//if number of results is 1 credentials are correct

//redirect to secret file
header("Location:secret.php");


}else{
    //if result is zero
echo  "<div class='alert alert-danger'>Please Login with  your correct email and password</div>";


}



}



}
?>


   <!-- Find a way to achieve sticky forms -->
        <form method="POST" action="">
        <div class="form-group">
            <label>Email*</label>
            <input type="text"  class="form-control" required  name="email" />
        </div>

        <div class="form-group">
            <label>Password*</label>
            <input type="password" class="form-control" required name="password" />
        </div>
 

    <input type="submit" class="btn btn-primary" value="submit" />
        </form>

<!-- closing col-md-6 -->
    </div>
    <!-- closing row -->
    </div>
    <!-- closing the container div -->
    </div>
    </body>
    </html>
