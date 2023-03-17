<?php
require_once("./src/db/connection.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styleIndexLight.css">
    <link rel="stylesheet" href="./css/game-info.css">
</head>

<body>
    <?php
    require_once("./commonHeader.php");
    ?>
    <main>
        <div id="container">
            <?php
            if (isset($_POST["gameInfo"])) {
                $id = $_POST["id"];
                $query = $connection->prepare("SELECT * FROM games WHERE id=:id_p");
                $query->bindParam(":id_p", $id, PDO::PARAM_STR);
                $resultCon = $query->execute();

                if ($resultCon > 0) {
                    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                        echo
                            "<div class='iframe-wrapper'>".
                            "<iframe class='game-trailer' src='" . $row["video"] . "' frameborder='0' allow='accelerometer; autoplay; controls; modestbranding; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>" .
                            "</div>" .
                            "<div class='items-wrapper'>" .
                            "<h1>" . $row["name"] . "</h1>\n" .
                            "<h2>" . $row["author"] . "</h2>\n" .
                            "<q>" . $row["description"] . "</q>\n" .
                            "</div>";
                    }
                }
            }
            ?>
        </div>
    </main>
</body>
</html>