<?php

function sayHello() {
    echo "Hello PHP function!";
}

function newLine() {
    echo "<br>";
}

sayHello();
newLine();

function sayHello2($name) {
    echo "Hello, $name.";
}

sayHello2('Sarah');
newLine();
sayHello2('John');
newLine();

function sayHello3($name, $age) {
    echo "Hello $name, you are $age years old.";
}

sayHello3('Bobo', 41);
newLine();
sayHello3("Ziad", 14);
newLine();

echo "<h2>Math</h2>";

function cube($n) {
    echo $n * $n * $n;
}

cube(3);
newLine();
cube(17);

echo "<h2>Celcius</h2>";


function celciusConverter($temp) {
    echo $temp * 9 / 5 + 32;
}

celciusConverter(0);
newLine();
celciusConverter(5);
newLine();

echo "<h2>Area and Volume</h2>";

function volume($length, $width, $height) {

    return array($length * $width, $length * $width * $height);
}

$array = volume(2, 3, 4);
echo "Area: {$array[0]}";
newLine();
echo "Volume: {$array[1]}";

function volume2($length, $width, $height) {

    return array($length * $width, $length * $width * $height);
}
newLine();

list($myArea, $myVolume) = volume2(10, 5, 2);

echo $myArea;
newLine();
echo $myVolume;
?>