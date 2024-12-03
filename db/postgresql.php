<?php
$dbname = "php_www-php"; 
$dsn = "pgsql:host=localhost;port=5432;dbname=$dbname;";
$user = "username";
$password = "password";
$db = new PDO($dsn, $user, $password);