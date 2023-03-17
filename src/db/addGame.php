<?php
require_once("connection.php");
if (isset($_POST["addGame"])) {
    $image = $_FILES["image"]["name"] ?? "default-image.jpg";
    if ($image != "") {
        // Where the file is going to be stored
        $target_dir = "./multimedia/images/GamesCovers/";
        $file = $_FILES["image"]["name"];
        $path = pathinfo($file);
        $filename = $path["filename"];
        $ext = $path["extension"];
        $temp_name = $_FILES["image"]["tmp_name"];
        $path_filename_ext = $target_dir . $filename . "." . $ext;

        $name = $_POST["name"];
        $author = $_POST["author"];
        $description = $_POST["description"];
        $video = $_POST["video"];

        // Comprobar si el archivo subido ya existe
        if (file_exists($path_filename_ext)) {
            echo "<script>alert('¡El archivo ya existe!')</script>";
        } else {
            move_uploaded_file($temp_name, $path_filename_ext);
            echo "<script>alert('Imagen guardada con éxito')</script>";
        }

        $query = $connection->prepare("SELECT * FROM games where name=:name_p");
        $query->bindParam("name_p", $name, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() > 0) {
            echo "El juego insertado ya existe.";
        } else {
            $query = $connection->prepare("INSERT INTO games (name, author, description, image, video) VALUES (:name_p, :author_p, :description_p, :image_p, :video_p)");
            $query->bindParam(":name_p", $name, PDO::PARAM_STR);
            $query->bindParam(":author_p", $author, PDO::PARAM_STR);
            $query->bindParam(":description_p", $description, PDO::PARAM_STR);
            $query->bindParam(":image_p", $path_filename_ext, PDO::PARAM_STR);
            $query->bindParam(":video_p", $video, PDO::PARAM_STR);
            $resultCon = $query->execute();
        }
    }
}
