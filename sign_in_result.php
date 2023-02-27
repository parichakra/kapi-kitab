 <?php
$email= $_POST['email'];
$password = $_POST['password'];
 
if(empty($email))
{
    $email_error ="please insert valid email";
}
if(empty($password))
{
    $password_error = "please enter the password";
}

if(empty($email_error) and empty($password_error))
{
    $successful_message = "your form submitted successfully";
}

 include("login.php");
  ?>

