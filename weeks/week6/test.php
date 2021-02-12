<?php
$array = Array
(
    'first_name' => 'a',
    'last_name' => 'a',
    '$email' => 'a@a.com',    
    '$gender' => 'female',
    $wines = Array
        (
            0 => 'Cabernet',
            1 => 'Merlot',
            2 => 'Syrah',
            3 => 'Pinot Noir',
        ),
    'region' => 'NULL',
    'comments' => ""
    );


if (in_array('Merlot', $wines)) {
    echo "In the array.";
} else {
    echo "Not in the array";
}

function myWines($array) {

    if (!empty($array)) {
        return implode(", ", $array);
    } else {
        echo "Wines are empty";
    }
}



//myWines($array);
echo "<br>";
//myWines($wines);
echo "<br>";
$body = "Your favorite wines are " . myWines($wines);
echo $body;



?>