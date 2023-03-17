<?php
$sessionId = $_SESSION["id"]; 
if(isset($_POST["updateProf"])) {
    $image = $_FILES["image"]["name"] ?? "default-image.jpg";
    if ($image != "") {
        // Doonde guardaremos el archivo
        $target_dir = "./multimedia/images/profPics/";
        $file = $_FILES["image"]["name"];
        $path = pathinfo($file);
        $filename = $path["filename"];
        $ext = $path["extension"];
        $temp_name = $_FILES["image"]["tmp_name"];
        $path_filename_ext = $target_dir . $filename . "." . $ext;

        if (file_exists($path_filename_ext)) {
            echo "<script>alert('¡El archivo ya existe!')</script>";
        } else {
            move_uploaded_file($temp_name, $path_filename_ext);
            echo "<script>alert('Guardado con éxito. Verá los cambios al reinicar sesión')</script>";
        }

        $user = $_POST["user"];
        $pwd = password_hash($_POST["pwd"], PASSWORD_BCRYPT);
    
        $query = $connection->prepare("UPDATE users SET user = '$user', profPic = '$path_filename_ext', pwd = '$pwd' where id = $sessionId");
        $query->execute();
    }
}
