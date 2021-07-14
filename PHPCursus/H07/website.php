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
require 'database.php';
session_start();

$query = "SELECT * FROM inloggegevens WHERE mail = '" . $_SESSION['user'] . "'";
$stmt = $conn->prepare($query) or die ('ERROR');
$stmt->execute() or die ('ERROR');


if(isset ($_SESSION["user"])){
    echo "";
    echo  '<table>';
    while($array = $stmt->fetch()) {
        $_SESSION["rol"]=$array["rol"];
        echo '<tr>';
        echo "<td> Welkom ".$_SESSION["user"]. " op de website. Jouw rol is: " . $array['rol'] . "</td>";
        echo '</tr>';
    }
    echo '</table>';

} else{
    header('location: login.php');
}
?>
<br>
<P><a href="admindeel.php">admindeel</a></P>
<p><a href="indexH07.php?loguit"><button type="button">uitloggen</button></a></p>

</body>
</html>