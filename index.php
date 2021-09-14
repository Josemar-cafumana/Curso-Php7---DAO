<?php

require_once "config.php";


$conn = new Sql();

$users = $conn->select("SELECT * FROM users");

echo json_encode($users);
?>