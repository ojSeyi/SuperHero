<?php
    define('DB_server', 'us-cdbr-azure-southcentral-e.cloudapp.net');
    define('DB_username', 'bbf3c48901b85f');
    define('DB_password', '8038ddc6');
    define('DB_name', 'marvelheroes');

    $db = new mysqli("DB_server", "DB_username", "DB_password", "DB_name");

    if($db->connect_errno){
        die('Connectfailed['.$db->connect_error.']');
    }
?>
 
