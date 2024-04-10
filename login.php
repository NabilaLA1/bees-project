

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='./assets/css/login.css'>
    <title>log in</title>
</head>
<body>
    
<?php include './includes/process.inc.php'; ?>


    <div class="login">
        <div class="column-1">
            <img src="./icons/logo.svg" alt="">
            <h5>Unlocking your dream home!</h5>
        </div>
        <div class="column-2">
            <h1>Log in</h1>
            <form action="" class="loginform" method="post">

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
                    <img src="./icons/envelope-solid.svg" alt="">
                     <input type="email" name="email" placeholder=" Email address" class="input" required>
                </div>
                <div class="input-field">
                    <img src="./icons/lock-solid.svg" alt="">
                     <input type="password" name="password" placeholder="Password" class="input" required>
                </div>
                <a class="button"><button type="submit" name="login">Log in</button></a>
            </form>
            <div class="no-acct">
                <h5>Dont have an account?</h5><a class="button" href="signup.php"><button>Sign up</button></a>
            </div>
            
        </div>
    </div>

   
</body>
</html>