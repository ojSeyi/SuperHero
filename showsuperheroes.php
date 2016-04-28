<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marvel Heroes</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header>
    <img src="assets/images/logo.png" alt="logo"/>
    <nav>
        <ul>
            <li><a href=#>Home</a></li>
            <li><a href="showsuperheroes.php">Heroes</a></li>
            <li><a href="superheroform.html">Hero Registration</a></li>
        </ul>
    </nav>
</header>
<main>
    <ul>
    <?php
    include ("DB_Connection.php");

        $getAllHeroes = "SELECT * FROM superheroes";

        $heroListResult = $db -> query($getAllHeroes);
        while($row = $heroListResult->fetch_array()){
            echo "<li> {$row} </li>";
        }
        $heroListResult->close();
        $db->close();
    ?>
    </ul>
</main>
<footer>(c) Seyi Marvel Parody 2016</footer>
</body>
</html>