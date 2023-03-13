<?php
require_once("connection.php");

if (isset($_POST["login"])) {
    $username = $_POST["user"];
    $pwd = $_POST["pwd"];

    $query = $connection->prepare("SELECT * FROM users where user=:user_p");
    $query->bindParam("user_p", $username, PDO::PARAM_STR);
    $query->execute();

    $resultCon = $query->fetch(PDO::FETCH_ASSOC);

    if (!$resultCon) {
        echo "<script>alert('El usuario o la contraseña son incorrectos')</script>";
    } else {
        if (password_verify($pwd, $resultCon["pwd"])) {
            $_SESSION["id"] = $resultCon["id"];
            $_SESSION["user"] = $resultCon["user"];
            $_SESSION["pwd"] = $resultCon["pwd"];
        echo "<script>alert('inicio de sesión realizado')<script/>";
        header("Location: ./index.php");
        } else {
        echo "<script>alert('El usuario o la contraseña son incorrectos')</script>";
        }
    }
}
