<?php
declare(strict_types=1);

function check_signup_errors(){
    if(isset( $_SESSION["errors_signup"])){
        $errors=$_SESSION['errors_signup'];

        echo"<br>";

        foreach($errors as $errors){
            echo '<p class="form-error">'.$errors.'</p>';
        }

        unset($_SESSION['errors_signup']);
    }
}