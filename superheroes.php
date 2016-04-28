<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marvel Heroes</title>
</head>
<body>
    <ul>
    <?php
        if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['gender']) || empty($_POST['power'])){
            echo "Please enter all details of Super Hero";
        }
        else{
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $gender = $_POST['gender'];
            $power = $_POST['power'];

            echo
                "{<li>{$firstname} {$lastname} {$gender} {power} </li>}";

        }
    ?>
    </ul>
</body>
</html>