
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Register</title>
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
<h1>Verification Page</h1>
<div class="jumbotron">
    <h3>Vardump of Post data in array</h3>
<?php 

date_default_timezone_set("GMT");
//dumping the post data we got from the register page

if(isset($_POST)){
    $mysql = mysqli_connect("localhost","root","","codespark") or die("Error Connecting to Database");

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO profile VALUE('".$firstname."',"."'".$lastname."',"."'".$email."','".$phone."' )";

    mysqli_query($mysql,$sql) or die("Error Inserting data into database");

    mysqli_close($mysql);

    echo "Your profile has been saved successfully";
}else{

    echo "Please use the right route!";
}

//connection to mysql






//saving it in a variable for easy read
$user=$_POST;


?>
</div>
<div class="card" style="width: 18rem;">
<ul class="list-group list-group-flush">
   <li class="list-group-item"><b>FirstName:</b> <?php echo $user['firstname']  ?> </li> 
   <li class="list-group-item"><b>LastName:</b><?php echo $user['lastname'] ?>  </li> 
   <li class="list-group-item"><b>Email:</b><?php echo $user['email'] ?>  </li> 
   <li class="list-group-item"><b>Phone:</b><?php echo $user['phone'] ?>  </li> 

</ul>
</div>

<a href="welcome.php" class="btn btn-success">Save & Continue</a>
    </div>
    <!-- closing row -->
    </div>
    <!-- closing the container div -->
    </div>
    </body>
    </html>

    <?php
    session_unset();
    ?>