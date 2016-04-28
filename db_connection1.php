<?php
define('DB_SERVER', 'us-cdbr-azure-southcentral-e.cloudapp.net');
define('DB_USERNAME', 'be3149d439cf7b');
define('DB_PASSWORD', '7fe76a1d');
define('DB_NAME', 'DB1509941_1');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
?>

if(mysqli_connect_errno($db)){
    echo "Failed to connect: " . mysqli_error();
}
?>