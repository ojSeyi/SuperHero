<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marvel Heroes</title>
</head>
<body>

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
                "<h2>{$firstname} {$lastname} {$gender} {$power}</h2>";

        }
    ?>

</body>
</html>