<?php
require_once("connection.php");

if (isset($_POST["register"])) {
    $username = $_POST["user"];
    $mail = $_POST["mail"];
    $pwd = $_POST["pwd"];
    $pwd_hash = password_hash($pwd, PASSWORD_BCRYPT);

    $query = $connection->prepare("SELECT * FROM users where mail=:mail_p");
    $query->bindParam(":mail_p", $mail, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount() > 0) {
        echo "El correo insertado ya existe.";
    } else {
        $query = $connection->prepare("INSERT INTO users (user, mail, pwd) VALUES (:username_p, :mail_p, :pwd_hash_p)");
        $query->bindParam(":username_p", $username, PDO::PARAM_STR);
        $query->bindParam(":mail_p", $mail, PDO::PARAM_STR);
        $query->bindParam(":pwd_hash_p", $pwd_hash, PDO::PARAM_STR);
        $resultCon = $query->execute();

        if ($resultCon) {
            echo "Funsiona";
        } else {
            echo "No va";
        }
    }
}