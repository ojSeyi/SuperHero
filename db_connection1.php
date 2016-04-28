<?php
    define('host', 'us-cdbr-azure-southcentral-e.cloudapp.net")');
    define('username', 'be3149d439cf7b');
    define('password', '7fe76a1d');
    define('database', 'marvelheroes');

$db = mysqli_connect("host", "username", "password", "database");

if(mysqli_connect_errno()){
    die('Connectfailed['.mysqli_connect_error($db).']');
}
?>