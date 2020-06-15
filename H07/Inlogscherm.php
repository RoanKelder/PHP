<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Title</title>
        </head>
<body>
<?php
session_start();

if(isset($_GET["loguit"])){
    $_SESSION = array();
    session_destroy();
}
?>


<h1>inlog</h1>

<form action="inlogewebsite.php" method="post">
    E-mail: <input type="text" name="naam"><br>
    Wachtwoord: <input type="password" name="wachtwoord"><br>
    <input type="submit" value="login" name="knop"><br>
</form>

<br>
<a href="H07.php"><button type="button">Hooftstuk 7 index</button></a>
</body>
</html></title>
</head>
<body>

</body>
</html>
