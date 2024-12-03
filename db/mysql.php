<?php
$dbname = "php_www";
$dsn = "mariadb: host=127.0.0.1; port=3303; charset=utf8mb4; "; // dbname=$dbname;
$user = "username";
$password = "password";
$db = new PDO($dsn, $user, $password);

$stmt = $db->prepare("USE mydb;");
$stmt->execute();
