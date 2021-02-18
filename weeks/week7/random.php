<?php
$dice = rand(1, 6);
echo $dice;
echo '<br>';

$dice1 = rand(1, 6);
$dice2 = rand(1, 6);
$dice3 = rand(1, 6);
echo "<br>";
echo $dice1;
echo "<br>";
echo $dice2;
echo "<br>";


if ($dice1 == $dice2) {
    echo "You win, you have a double.<br>";
} else {
    echo "You lose.<br>";
}

$photos = [
    'photo1',
    'photo2',
    'photo3',
    'photo4',
    'photo5'
];

$i = rand(0, 4);
$selected_image = "/it261/weeks/week7/images/{$photos[$i]}.jpg";

echo "<img src='$selected_image' alt='{$photos[$i]}'>";


?>