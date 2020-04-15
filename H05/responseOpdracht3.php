<?php

//print_r($_POST);

//echo "<img src='Recourses/Doggos/".$_POST['Doggos'].".jpg'>";

//print_r($_POST['Doggos']);

foreach ($_POST['Doggos'] as $doggo){
      echo "<img src='../../Recourses/Doggos/".$doggo.".jpg'>";
}