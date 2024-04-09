<?php

require "./includes/connection.inc.php";

if (isset($_POST["signup"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    if ($password !== $confirmPassword) {
        $error = "Passwords do not match";
    } else {
        $encrypt_password = md5($password);

        //check if user exists
        $sql_check = "SELECT * FROM users WHERE email = :email";
        $stmt_check = $pdo->prepare($sql_check);
        $stmt_check->execute(['email' => $email]);
        if ($stmt_check->fetch()) {
            //user exists
            $error = "User already exists";
        } else {
            //insert into DB
            $sql = "INSERT INTO users(name,email,password) VALUES(:name, :email, :password)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['name' => $name, 'email' => $email, 'password' => $encrypt_password]);
            $success = "Registration successful";
        }
    }
}

if (isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];
    $encrypt_password = md5($password);

    // Check if user exists
    $sql_check = "SELECT * FROM users WHERE email = :email AND password = :password";
    $stmt_check = $pdo->prepare($sql_check);
    $stmt_check->execute(['email' => $email, 'password' => $encrypt_password]);
    $user = $stmt_check->fetch();

    if ($user) {
        // User exists, set session
        session_start();
        $_SESSION["user"] = $user["name"]; 
        
        $success = "Login successful";
        // Redirect to dashboard
        // header("Location: dashboard.php");
        // exit();
    } else {
        $error = "Invalid email or password";
    }
}


?>
