<?php

// php -t www -S localhost:8080

session_start();
$_SESSION['counting'] = (int)@$_SESSION['counting'] + 1;

header('Content-Type: application/json; charset=utf-8');
print( json_encode($_SESSION) );
