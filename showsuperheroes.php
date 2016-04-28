<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marvel Heroes</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<?php     ;?>
<header>
    <img src="assets/images/logo.png" alt="logo"/>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href=#>Heroes</a></li>
            <li><a href="superheroform.html">Hero Registration</a></li>
        </ul>
    </nav>
</header>
<main>
    <ul>
    <?php
    include("db_connection1.php");
        $getAllHeroes = "SELECT * FROM superheroes";

        $heroListResult = mysqli_query($db, $getAllHeroes);
        while($row = mysqli_fetch_array($heroListResult)){
            echo "<li>" .$row. "</li>";
        }


    ?>
    </ul>
</main>
<footer>(c) Seyi Marvel Parody 2016</footer>
</body>
</html>