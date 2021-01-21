<?php
//This will be a page of variables!
echo "<h2>Var</h2>";
$name = 'Sarah';
echo $name;
echo '<br>It is a rainy and windy day.';
$name = 'John';
echo '<br>';
echo $name;
$lastName = 'Compton';
echo '<br>';
echo $lastName;
echo '<br>';
echo $name . ' ' . $lastName;
// single quotes vs. double quotes
// single quotes quote exactly
// with double quotes, we can interpolate variables!
echo "<br>$name $lastName";
//can add to a variable
$name .= " Martin";
echo $name;
//integers
$x = 20;
$y = 25;
$z = $x + $y;

$zRounded = number_format($z/=7, 2);
echo '<br>';
echo "$$zRounded<br>";
echo date('Y');

//array
// you cannot echo an array, however you can use print_r
$nav[] = 'Home';
$nav[] = 'About';
$nav[] = 'Daily';
$nav[] = 'Contact';
$nav[] = 'Lastest News';
echo "<br>";
echo $nav[0];
print_r($nav); // prints HomeArray ( [0] => Home [1] => About [2] => Daily [3] => Contact [4] => Lastest News )
echo "<br>";
var_dump($nav); // array(5) { [0]=> string(4) "Home" [1]=> string(5) "About" [2]=> string(5) "Daily" [3]=> string(7) "Contact" [4]=> string(12) "Lastest News" } 

// dictionary or hash
$nav2 = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'About'
);
echo "<br>";
print_r($nav2);
//another way of doing it
$nav3 = [
'index.php' => 'Home',
'about.php' => 'About',
'daily.php' => 'Daily',
'contact.php' => 'About'
];
echo "<br>";
print_r($nav3);

echo "<br>";
$show = "Succession";
$actor = "Nicholas Braun";
$character = "Greg";
$showGenre = "drama";
echo "Right now I'm watching $show, part of the $showGenre genre. My favorite character $character, played by $actor.";









