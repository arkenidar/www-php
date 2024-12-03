<?php

// php -t www -S localhost:8080

require_once '../common/init.php';

$nickname = $_REQUEST['nickname'];
$password = $_REQUEST['password'];

$stmt = $db->prepare('SELECT * FROM person WHERE nickname = :nickname AND password = :password');
$stmt->execute(compact('nickname', 'password'));

$json = $stmt->fetchAll(PDO::FETCH_ASSOC);
//$json = [1,2,3,4,5];

if (count($json) == 0) {
    $json = ['error' => 'Invalid nickname or password'];
} else if (count($json) == 1) {
    $json = $json[0];

    session_start();
    $_SESSION['nickname'] = $nickname;

    $json = ['success' => 'Valid nickname and password'];
    
} else {
    $json = ['error' => 'Database error'];
}

header('Content-Type: application/json; charset=utf-8');
print( json_encode( $json ) );

