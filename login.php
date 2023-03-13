<?php
require_once("./src/db/login.php");
require_once("./src/db/register.php");
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
</head>

<body>
    <?php
    include("./commonHeader.php");
    ?>
    <main>
        <div id="forms-container">
            <div class="container">
                <div id="form-info">
                    <!-- <img src="./multimedia/images/LightTheme/NB_Logo_Black.png" alt="logo" height="70px" width="165px"> -->
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
                            <input type="submit" name="register" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>