
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

<form action="response.php" method="post">
    E-mail: <input type="text" name="mail"><br>
    Wachtwoord: <input type="password" name="wachtwoord"><br>
    <input type="submit" value="login" name="knop"><br>
</form>



</body>
</html>