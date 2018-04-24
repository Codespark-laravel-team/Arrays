<?php
session_start();
// Firstname
$firstname = $_POST['firstname'];
// lastname
$lastname = $_POST['lastname'];
// Email
$email = $_POST['email'];
// Phone
$phone = $_POST['phone'];

//checking for errors


if(!is_numeric($phone)){
   //creating a new phone error message session
    $_SESSION['phone_error'] ="Your phone number needs to be in numbers";
    //redirect user back to the sign up page
    header('Location: index.php');
//  echo  "Your phone number needs to be in numbers";


}

?>


<h3>Thank you for signing up</h3>


<h4>You Firstname is <?php echo $firstname ?>  </h4>
<h4>You Lastname is <?php echo $lastname ?></h4>
<h4>You Email is <?php echo $email ?> </h4>
<h4>You Phone is <?php echo $phone?> </h4>
