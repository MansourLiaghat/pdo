<?php

include_once "connect.php";

$sql = "DELETE FROM user WHERE city in('tehran')";
$stmt = $db->prepare($sql);
$stmt->execute();
echo $stmt->rowCount();