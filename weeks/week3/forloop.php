<?php

$celcius = 14;
$fahrehnheit = $celcius * 9 / 5 + 32;

for ($celcius = 0; $celcius <= 100; $celcius+=5) {
    $fahrehnheit = $celcius * 9 / 5 + 32;
    echo "Celcius: $celcius &nbsp;Fahrenheit: $fahrehnheit<br>";
}
echo "<br><br>";

function miles($kilometers) {
    return $kilometers *= 1.6;
}

for ($i = 0; $i <= 1000; $i+=100) {
    echo "Kilometers: $i  Miles: " . miles($i) . "<br>";
}

// switch notes
// global variables are capitalized
// this week we will be working with $_GET
// next week we will use $_POST
// is today set?
// for this we can use isset() which is a predefined function

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Thursday':
        echo "Thursday";
        break;
}
?>