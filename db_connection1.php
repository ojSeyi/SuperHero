<?php
    define('hostname', 'us-cdbr-azure-southcentral-e.cloudapp.net")');
    define('username', 'bbf3c48901b85f');
    define('password', '8038ddc6');
    define('database', 'marvelheroes');

$db = mysqli_connect(hostname, username, password, database);

if(mysqli_connect_errno()){
    die('Connectfailed['. mysqli_connect_error($db).']');
}
?>