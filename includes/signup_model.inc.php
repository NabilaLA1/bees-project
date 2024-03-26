<?php
declare(strict_types=1);
//QUERY DATABASE
function get_name(object $pdo, string $name){
    $query="SELECT name FROM newusers WHERE name= :name; ";
    $stmt=$pdo->prepare($query);
    $stmt->bindParam(":name",$name);
    $stmt->execute();

    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function get_email(object $pdo, string $email){
    $query="SELECT email FROM newusers WHERE email= :email; ";
    $stmt=$pdo->prepare($query);
    $stmt->bindParam(":email",$email);
    $stmt->execute();

    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}