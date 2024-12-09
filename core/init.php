<?php
$db = mysqli_connect('127.0.0.1','root','Kwanele@050509','redstoneshop');
if(mysqli_connect_error()) {
    echo 'Database Connection Failed with the following errors: '. mysqli_connect_error();
    die();
} 

// to initialize a start session. This is based on an identifier such as user actions and cookies
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/tutorial/config.php';
require_once BASEURL.'helpers/helpers.php';

$cart_id = '';
if(isset($_COOKIE[CART_COOKIE])) {
    $cart_id = sanitize($_COOKIE[CART_COOKIE]);
}


?>