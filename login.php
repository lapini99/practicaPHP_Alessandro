<?php
require_once("./src/db/login.php");
require_once("./src/db/register.php");

$regExMail = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!isset($_POST["mail"]) || empty($_POST["mail"])) {
    $mail = "default@default.com"; 
} else if (!preg_match($regExMail, $_POST["mail"])) {
    echo "<script>alert('Error en el correo')</script>";
} else {
    $mail = $_POST["mail"];
}

$regExUser = "/^[a-zA-Z]+$/";
if (!isset($_POST["user"]) || empty($_POST["user"])) {
    $user = "defaultUser"; 
} else if (!preg_match($regExUser, $_POST["user"])) {
    echo "<script>alert('Error en el usuario')</script>";
} else {
    $user = $_POST["user"];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neverbloom Productions</title>
    <link rel="stylesheet" href="./css/styleIndexLight.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="icon" href="./multimedia/images/NB_Logo_Pink.png">
    <script src="./javascript/validateForms.js"></script>
</head>

<body>
    <?php
    include("./commonHeader.php");
    ?>
    <main>
        <div id="forms-container">
            <div class="container">
                <div id="form-info">
                </div>
                <div class="wrapper">
                    <div class="item-form">
                        <h2>Iniciar sesión</h2>
                        <form action="" method="post" class="form">
                            <label for="user">Usuario</label>
                            <input type="text" name="user" id="user">
                            <label for="pwd">Contraseña</label>
                            <input type="password" name="pwd" id="pwd">
                            <input type="submit" name="login" value="Enviar">
                        </form>
                    </div>
                    <div class="item-form">
                        <h2>Crear cuenta</h2>
                        <form action="" method="post" class="form" id="register" name="register">
                            <label for="user">Usuario</label>
                            <input type="text" name="user" id="user">
                            <label for="mail">Correo</label>
                            <input type="email" name="mail" id="mail">
                            <label for="pwd">Contraseña</label>
                            <input type="password" name="pwd" id="pwd">
                            <input type="submit" name="register" value="Enviar" onclick="registerForm()">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>