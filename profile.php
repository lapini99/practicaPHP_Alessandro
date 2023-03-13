<?php
require_once("./src/db/connection.php");
require_once("./src/db/updateUser.php");
if (!isset($_SESSION["id"])) {
    echo "<script>alert('Debe iniciar sesión para acceder a esta página')</script>";
    header("Location: login.php");
    exit;
} else {
}

$user = $_SESSION["user"];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="./css/styleIndexLight.css">
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="icon" href="./multimedia/images/NB_Logo_Pink.png">
    <script src="./javascript/profile.js" defer></script>
</head>

<body>
<?php
include("./commonHeader.php");
?>
<main>
    <div id="profile-container">
        <img src="./multimedia/images/profPicDefault.png" alt="profile-picture" id="prof-pic-preview">
        <form action="" method="post">
            <input type="file">
            <label for="user"></label>
            <input type="text" name="user" class="mod" id="user" value="<?= $user ?>" disabled>
            <label for="pwd"></label>
            <input type="password" name="pwd" class="mod" id="pwd" value="user-password" disabled>
            <input type="submit" value="Guardar cambios" name="updateProf">
        </form>
        <button id="modify" name="modify">Modificar</button>
    </div>
</main>
</body>

</html>