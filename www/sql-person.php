<?php

// php -t www -S localhost:8080

require_once '../common/init.php';

$stmt = $db->prepare('SELECT * FROM person');
$stmt->execute();

$json = $stmt->fetchAll(PDO::FETCH_ASSOC);
//$json = [1,2,3,4,5];

header('Content-Type: application/json; charset=utf-8');
print( json_encode( $json ) );

