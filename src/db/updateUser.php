<?php
$sessionId = $_SESSION["id"]; 
if(isset($_POST["updateProf"])) {
    $user = $_POST["user"];
    $pwd = password_hash($_POST["pwd"], PASSWORD_BCRYPT);

    $query = $connection->prepare("UPDATE users SET user = '$user', pwd = '$pwd' where id = $sessionId");
    $query->execute();
}
