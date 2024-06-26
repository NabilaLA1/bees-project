
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='./assets/css/signup.css'>
    <title>log in</title>
</head>
<body>

<?php include './includes/process.inc.php'; ?>

    <div class="sign-up">
        <div class="column-1">
            <img src="./icons/logo.svg" alt="">
            <h5>Unlocking your dream home!</h5>
        </div>
        <div class="column-2">
            <h1>Sign up</h1>
            <form action="" class="signupform" method="post">

            <!-- Succces and Error Notification -->
            <div class="form-group"> 
          <?php 
              if(isset($error)) {
                  ?>
                  <div class="alert alert-danger">
                      <strong><?php echo $error ?></strong>
                  </div>
                  <?php
              }elseif (isset($success)) {
                  ?>
                <div class="alert alert-success">
                <strong><?php echo $success ?></strong>
               </div>
               <?php
              }
          ?>
      </div>
                <div class="input-field">
                    <img src="./icons/user-solid.svg" alt="" class="uimg">
                     <input type="text" name="name" placeholder=" Name" class="input" required>
                </div>
                <div class="input-field">
                    <img src="./icons/envelope-solid.svg" alt="">
                     <input type="email" name="email" placeholder=" Email address" class="input" required>
                </div>
                <div class="input-field">
                    <img src="./icons/lock-solid.svg" alt="">
                     <input type="password" name="password" placeholder="create Password" class="input" required>
                </div>
                <div class="input-field">
                    <img src="./icons/lock-solid.svg" alt="">
                     <input type="password" name="confirmPassword" placeholder="confirm Password" class="input" required>
                </div>
                <a class="button"  href="#" ><button type="submit" name="signup">Sign up</button></a>
            </form>
            <div class="no-acct">
                <h5>Already have an account?</h5><a class="button" href="login.php"><button>Log in</button></a>
            </div>
           
            
        </div>
    </div>
</body>
</html>