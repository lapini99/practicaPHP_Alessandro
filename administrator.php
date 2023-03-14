<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neverbloom Productions</title>
    <link rel="stylesheet" href="./css/styleIndexLight.css">
    <link rel="icon" href="./multimedia/images/NB_Logo_Pink.png">
</head>

<body>
    <?php
    include("./commonHeader.php");
    ?>
    <form action="" method="post">
        <label for="name">Título: </label>
        <input type="text" name="name" id="name">
        <label for="author">Autor: </label>
        <input type="text" name="author" id="author">
        <label for="description">Descripción: </label>
        <input type="text" name="description" id="description">
        <label for="image">Imagen: </label>
        <input type="file" name="image" id="image">
        <label for="video"></label>
        <input type="text" name="video" id="video">
    </form>
</body>

</html>