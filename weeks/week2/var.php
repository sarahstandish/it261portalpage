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
//single quotes quote exactly
//with double quotes, we can interpolate variables!
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

echo "<h2>Var2</h2>";
echo "<br>";
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

echo "<h2>Currency</h2>";
$rubles = 1000;
$sterling = 500;
$rubles_to_dollars = 0.013;
$sterling_to_dollars = 1.28;
$jordanian_dinars = 60;
$dinars_to_dollars = 1.41;
$canadian_dollars = 100;
$canadian_to_dollars = .79;
$pesos = 1050;
$pesos_to_dollars = 0.051;

?>

<!doctype html>
<html lang="en">
<body>
<table>
    <tr>
        <th>Currency</th>
        <th>Dollars</th>
    </tr>
    <tr>
        <td>Russian Rubles</td>
        <td>$<?php echo number_format($rubles * $rubles_to_dollars, 2)?></td>
    </tr>
    <tr>
        <td>British Pounds</td>
        <td>$<?php echo number_format($sterling * $sterling_to_dollars, 2)?></td>
    </tr>
    <tr>
        <td>Jordanian Dinars</td>
        <td>$<?php echo number_format($jordanian_dinars * $dinars_to_dollars, 2) ?></td>
    </tr>
    <tr>
        <td>Candian Dollars</td>
        <td>$<?php echo number_format($canadian_dollars * $canadian_to_dollars, 2)?></td>
    </tr>
    <tr>
        <td>Mexican Pesos</td>
        <td>$<?php echo number_format($pesos * $pesos_to_dollars, 2)?></td>
    </tr>
</table>
</body>
</html>
<?php
//heredoc

$species = "cats";

echo "<br>";
echo "<h2>Heredoc</h2>";

$content = <<<EOT
 Jessika Trancik, an associate professor of energy studies at M.I.T. who led the research, said she hoped the data would “help $species learn about how those upfront costs are spread over the lifetime of the car.” 
EOT;
echo $content;

?>






