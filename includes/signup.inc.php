<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $pwd=$_POST["pwd"];
    try{
      require_once 'dbh.inc.php';
      require_once 'signup_model.inc.php';
      require_once 'signup_contr.inc.php';

      //ERROR HANDLERS

      $errors=[];//array

      if(is_input_empty($name,$pwd,$email)){
        $errors["empty_input"]='fill in all fields!';
      }
      if( is_email_invalid($email)){
        $errors["invalid_email"]='invalid email used!';

      }
      if( is_name_taken( $pdo, $name)){
        $errors["name_used"]='name already used!';

      }
      if(is_email_registered(  $pdo,$email)){
        $errors["email_used"]='Email already registered!';
        header("location: ../signup.php");
      }

      require_once 'config_session.inc.php';

      if($errors){
        $_SESSION["errors_signup"]=$errors;

      }
      

    } catch (PDOException $e){
        die("Query failed" .$e->getMessage());
    }
}else{
    header("location: ../signup.php");
    die();
}