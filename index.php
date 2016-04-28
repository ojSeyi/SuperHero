<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marvel Heroes</title>
</head>
<body>
    <div class="heroreg">
        <form action="superheroes.php" method="post">
            <label>First Name </label>
            <input type="text" placeholder="First Name" name="firstname"><br><br>
            <label>Last Name </label>
            <input type="text" placeholder="Last Name" name="lastname"><br><br>
            <label>Male </label>
            <input type="radio" value="male" name="gender"><br><br>
            <label>Female </label>
            <input type="radio" value="female" name="gender"><br><br>
            <label>Power </label>
            <input type="text" placeholder="Main Superhero Power" name="power"><br><br>
            <input type="submit" value="Go"><br>
        </form>
    </div>
</body>
</html>