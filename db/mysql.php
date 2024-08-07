<?php
$dbname = "php_www-php"; 
$dsn = "mysql:host=localhost;dbname=$dbname;charset=UTF8";
$user = "username";
$password = "password";
$db = new PDO($dsn, $user, $password);
