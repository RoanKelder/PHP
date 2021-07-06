
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kerstboom</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
<?php
for($i = 0; $i <=9; $i++) {
    for ($j = 0; $j<=$i; $j++) {
        echo "*";
    }
    echo "*<br>";

}
?>
</body>
</html>
