<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
session_start();

require 'database.php';

if(isset($_POST['mail']) && isset($_POST['wachtwoord'])){

    $mail = $_POST['mail'];
    $wachtwoord = $_POST['wachtwoord'];

    $query = "SELECT * FROM inloggegevens WHERE  mail = '$mail' AND wachtwoord = '$wachtwoord'";
    $stmt = $conn->prepare($query) or die('Error1');
    $stmt->execute() or die ('Error 2');

    $matches = $stmt->rowCount();
    echo 'Aantal matches: ' . $matches;
    if ($matches == 1){
        $_SESSION["user"] = $_POST["mail"];
        header('location: website.php');

    }
    else { 
     header('location: inlogscherm.php');
    }
}
?>
</body>
</html>