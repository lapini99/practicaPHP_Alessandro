<?php
session_start(); 
define("USER", "root");
define("PASSWORD", "");
define("HOST", "localhost");
define("DATABASE", "php_practica_alessandro");
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
    echo "no me conecto";
}
