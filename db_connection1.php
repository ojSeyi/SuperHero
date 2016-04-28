<?php
    define('hostname', 'us-cdbr-azure-southcentral-e.cloudapp.net")');
    define('username', 'bbf3c48901b85f');
    define('password', '8038ddc6');
    define('database', 'marvelheroes');

$db = mysqli_connect('us-cdbr-azure-southcentral-e.cloudapp.net', username, password, database);

if(mysqli_connect_errno($db)){
    echo "Failed to connect: " . mysqli_error();
}
?>