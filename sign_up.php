<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="sign_up.css">
    <link rel="stylesheet" href="homepage.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign_up</title>
</head>
<body >
    <div class="header">

        <div class="logobox "> <img id="logo" src="./photos/logo1.png" alt="logo ">
            <p id="name">KAPI KITAB</p>
        </div>
        <div class="top-section">
    
            <div class="nav-sec"> 
                <div class="nav-link">
                    <div class="A"><a href="homepage.php">HOME</a></div>
                    <div class="A"><a href="login.php">Log In</a></div>
                    <div class="A"><a href="">Your Book</a></div>
                </div>
                
            </div>
                 <input class="search-bar" type="text" placeholder="Search Here...">
        </div>
        </div>
    </div>
    <form action="sign_up_result.php" class="form"  method='POST'>
<fieldset class="fieldset">
    <legend>SIGN UP</legend>
    <label for="fullname">FULLNAME</label>
    <input type="text" id="fullname" placeholder="Enter fullname.." name="fname">
    <!-- checking for full name -->
    <?php if(isset($fname_error)){?> <p class="error-message"><?php  echo $fname_error; ?></p><?php } ?>
     <br><br>
     <label for="email">Email</label>
     <input type="email" name="email" id="email" placeholder="Enter email.."  name="email">
     <?php if(isset($email_error)){?> <p class="error-message"><?php  echo $email_error; ?></p><?php } ?>
     <br><br>
     <label for="password">Password</label>
     <input type="password" id="password" placeholder="Enter password" name="password">
     <?php if(isset($password_error)){?> <p class="error-message"><?php  echo $password_error; ?></p><?php } ?>
     <br>
     <label for="confirm-password">confirm Password</label>
     <input type="password" id="confirm-password" placeholder="Retype your password" name="cpassword">
     <?php if(isset($cpassword_error)){?> <p class="error-message"><?php  echo $cpassword_error; ?></p><?php } ?>
     <?php if(isset($password_match_error)){?> <p class="error-message"><?php  echo $notmatch_error; ?></p><?php } ?>

     <br>
      <input type="checkbox" onclick="showpassword()">showpassword
      <br><br>
     <input type="submit" class="button" value="Sign up">
       <br>
       Have an account?
       <br> &nbsp; &nbsp;<a class="sign-link" href="login.php">Sign in</a>
</fieldset>
   

<script>
    function showpassword(){
         
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } 
        else {
            x.type = "password";
        }
        var y = document.getElementById("confirm-password");
        if (y.type === "password") {
            y.type = "text";
        } else {
            y.type = "password";
        }
  
    }

    

</script>
</body>
</html>