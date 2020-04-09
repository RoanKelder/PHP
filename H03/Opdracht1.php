<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>

    </style>
</head>
<body>
<?php
    for($i = 1; $i<=9; $i++){
        if($i % 2 == 0){
            $class = "class = 'rood'";
        } else{
            $class = "class = 'groen'";
        }
        echo "<img ".$class. " src='../../Recourses/Doggo".$i.".jpg'>";
    }
?>


<br><br>
<a href="../../index.php"><button type="button">index</button></a>
</body>
</html>