<?php


function celsiusnaarfahrenheit($celsius)
{
    $fahrenheit = ($celsius * 1.8) + 32;

    return $celsius . " graden Celsius = " . $fahrenheit . " Fahrenheit.";
}

echo celsiusnaarfahrenheit(10);



