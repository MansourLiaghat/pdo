<?php

include_once "connect.php";

$sql = "SELECT * FROM user WHERE city LIKE 'teh%'";
$stmt = $db->prepare($sql);
$stmt->execute();

# Method 1 => FetchAll
$results = $stmt->fetchAll(PDO::FETCH_OBJ);
print_r($results);



# Method 2 => Fetch
//while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//var_dump($row);
//}

# Method 3 => Select Single
//$user29 = $stmt->fetch(PDO::FETCH_ASSOC);
//print_r("$user29->id $user29->fullName");