<?php

list($host, $database, $user, $pass) = ["localhost", "pdo", "root", ""];

try {
    $db = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connect SuccessFully" . PHP_EOL;
} catch (PDOException $error) {
    echo "PDO ERROR : Faild To Connect :" . $error->getMessage() . "On Line :" . $error->getLine();
    exit();
}