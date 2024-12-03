<?php
header('Content-Type: text/plain; charset=utf-8');

session_start();
if (isset($_SESSION['nickname'])) {
    $nickname = $_SESSION['nickname'];
    print("Hello, $nickname!\n");
} else {
    print("Hello, guest!\n");
}

