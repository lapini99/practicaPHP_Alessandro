<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
    <link rel="stylesheet" href="./css/styleIndexLight.css">
    <link rel="stylesheet" href="./css/game-catalog.css">
    <link rel="icon" href="./multimedia/images/NB_Logo_Pink.png">
</head>

<body>
    <?php
    include("./commonHeader.php");
    ?>
    <div id="game-wrapper">
        <div class="game">
            <img class="game-cover" src="./multimedia/images/GamesCovers/mgsv.jpg" alt="mgsv-cover">
            <h1>Metal Gear Solid V</h1>
            <h2>Hideo Kojima</h2>
            <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto cumque
                laborum obcaecati labore consectetur
                soluta maiores delectus quod suscipit, corrupti optio, placeat esse atque autem nemo
                mollitia similique est veritatis!</q><br>
            <button class="download"><a href="">Descargar</a></button>
        </div>
        <?php
        require_once("./src/db/gameMapper.php");
        if (!isset($_SESSION["id"])) {
            echo "<script>alert('Debe iniciar sesión para acceder a esta página')</script>";
            header("Location: login.php");
            exit;
        }
        ?>
    </div>
</body>

</html>