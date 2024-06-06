<?php

include_once 'connect.php';

$sql = "INSERT INTO user (id, fullName, age, city) VALUES (?,?,?,?)";

$stmt = $db->prepare($sql);

$users = [
    [1, 'aren', 2, 'kish'],
    [2, 'mahsa', 31, 'tehran'],
    [3, 'mansour', 34, 'golpayegan']
];

$db->beginTransaction();
foreach ($users as $user) {
    $stmt->execute($user);
    if ($user[1][2] == 31) {
        exit();
    }
}
$db->commit();