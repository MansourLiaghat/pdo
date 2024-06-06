<?php

include_once "connect.php";

$sql = "UPDATE user SET city = 'tehran' WHERE id = 1";

$stmt = $db->prepare($sql);
$stmt->execute();



//# Method 1
//$sql = "UPDATE user SET city = 'tehran' WHERE id = :id";
//$stmt->execute(['id'=>2]);


//# Method 2
//$sql = "UPDATE user SET city = 'tehran' WHERE id = ?";
//$stmt->execute([2]);
//
