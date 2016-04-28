<?php
include("db_connection1.php");
if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['gender']) || empty($_POST['power'])){
    echo "Please enter all details of Super Hero";
}
else{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $power = $_POST['power'];

    $addHero = "Insert into superheroes(firstName, lastName, gender, power) VALUES ($firstname, $lastname, $gender, $power)";

    $result = mysqli_query($db, $addHero);
    if(!$result){
        die("Could not enter data: " . mysqli_error());
    }else{
        echo "Entered successfully";
    }

    header("showsuperheroes.php"); //redirect to show heroes page
}

?>