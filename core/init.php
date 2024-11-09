<?php
$db = mysqli_connect('127.0.0.1','root','Kwanele@050509','redstoneshop');
if(mysqli_connect_error()) {
    echo 'Database Connection Failed with the following errors: '. mysqli_connect_error();
    die();
} ?>