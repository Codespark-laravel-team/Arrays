    <?php
    session_start();
    ?>
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
<h1>Register Now</h1>

<?php
if($_SESSION['phone_error']){
?>
<div class="alert alert-danger" role="alert">
<?php echo $_SESSION['phone_error'] ?>
</div>
<?php
}
?>
   <!-- Find a way to achieve sticky forms -->
        <form method="POST" action="verification.php" >
        <div class="form-group">
            <label>Firstname*</label>
            <input type="text" value="<?php if(isset($_POST['firstname'])){ echo $_POST['firstname']; }  ?>" class="form-control" required  name="firstname" />
        </div>


        <div class="form-group">
            <label>LastName*</label>
            <input type="text" class="form-control" required name="lastname" />
        </div>


        <div class="form-group">
            <label>Email*</label>
            <input type="email" class="form-control" required name="email" />
        </div>

        <div class="form-group">
            <label>Phone*</label>
            <input type="text" class="form-control" required name="phone" />
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

    <?php
session_unset();
    ?>