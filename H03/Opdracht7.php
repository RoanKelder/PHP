<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht7</title>
</head>
<body>



<?php

$kapperagenda = [
    "9.15" => "Mevr. Pietersen",
    "9.30" => "Mevr. Willemsen",
    "9.45" =>  "",
    "10.00" => "Paul van der broek",
    "10.15" => "Karel de meeuw",
    "10.30" => ""
];
print("De volgende momenten zijn nog beschikbaar:");

echo "<ul>";

foreach ( $kapperagenda as $tijd => $afspraak ); {
    if($afspraak == "" ) {
        print("<li>".$tijd."</li>") ;
    }



}
?>
</ul>
</body>
</html>