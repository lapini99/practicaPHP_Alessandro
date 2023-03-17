<?php
require_once("./src/db/addGame.php");
if (!isset($_SESSION["id"]) || $_SESSION["id"] != 1) {
    header("Location: ./index.php");
    exit();
}
if (isset($_POST["addGame"])) {
    $name = trim($_POST["name"]);
    $author = trim($_POST["author"]);
    $description = trim($_POST["description"]);
    $image = $_FILES["image"]["name"];
    $video = trim($_POST["video"]);
    
    // Validar los campos requeridos
    if (empty($name) || empty($author) || empty($description) || empty($image) || empty($video)) {
        echo "<script>alert('Por favor complete todos los campos')</script>";
    }
    
    // Validar el tipo de imagen
    $imageFileType = strtolower(pathinfo($image,PATHINFO_EXTENSION));
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
        echo "<script>alert('Solo se permiten archivos JPG, JPEG y PNG')</script>";
    }
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
    <div id="forms-container">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="name">Título: </label>
            <input type="text" name="name" id="name">
            <label for="author">Autor: </label>
            <input type="text" name="author" id="author">
            <label for="description">Descripción: </label>
            <input type="text" name="description" id="description">
            <label for="image">Imagen: </label>
            <input type="file" name="image" id="image" accept="image/png, image/jpeg">
            <label for="video">Video: (Reemplazar el watch de la URL por embed)</label>
            <input type="text" name="video" id="video">
            <input type="submit" value="Insertar" name="addGame" onclick="addGameForm()">
        </form>
    </div>
</body>

</html>