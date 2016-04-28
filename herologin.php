<?php
include ("db_connection1.php");
if(empty($_POST["heroID"])){
    echo "Hero ID required.";
}
else{
    $username=$_POST["heroID"];

    $sql="SELECT firstname FROM heroes WHERE lastName='$username'";
    $result = mysqli_query($db,$sql);

    if(mysqli_num_rows($result) == 1){
        $location = "showsuperheroes.php?username=$username";
        header("location: $location"); //redirecting to another page
    }
    else{
        echo "Incorrect Username and password.";
    }
}




?>