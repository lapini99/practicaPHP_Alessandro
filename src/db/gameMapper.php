<?php 
require_once("connection.php");

$query = $connection->prepare("SELECT * FROM games");
$resultCon = $query->execute();

if ($resultCon > 0) {
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        echo
        "<div class='game'>".
        "<iframe class='game-trailer' src='".$row["video"]."?&autoplay=1&loop=1' frameborder='0' allow='accelerometer; autoplay; modestbranding; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>".
        "<img class='game-cover' src=".$row["image"] ."alt='game-cover'>".
        "<h1>".$row["name"]."</h1>\n".
        "<h2>".$row["author"]."</h2>\n".
        "<q>".$row["description"]."</q>\n".
        "</div>";
    }
}