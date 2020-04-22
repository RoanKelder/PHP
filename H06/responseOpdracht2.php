<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inlog</title>
</head>
<body>

</body>
</html>

<?php

require 'mysqlenphp.php';

if(isset($_POST['email']) && isset($_POST['wachtwoord'])){

    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];
    $query = "SELECT * FROM inloggegevens2 WHERE  naam = '$email' AND wachtwoord = '$wachtwoord'";
    exit($query);
    $stmt = $conn->prepare($query) or die('Error1');
    $stmt->execute() or die ('Error 2');
    $rows = $stmt->rowCount();

    echo 'Aantal matches: ' . $rows;
    if ($rows == 1){
        echo 'Welkom';
    } else {
        echo 'Geen toegang';
    }
}



