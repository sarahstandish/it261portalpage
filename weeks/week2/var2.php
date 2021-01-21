<?php
echo "<h2>Var2</h2>";
echo "<br>";
$z = 3;
echo floor(number_format($z/=2, 2));
//floor() for rounding down
//ceil for rounding 
echo "<br>";
echo ceil($z/=2);
//circumference
echo "<br>";
$radius = 10;
$pi = 3.14;
$circumference = 2 * $pi * $radius;
echo $circumference;
echo "<br>";
?>