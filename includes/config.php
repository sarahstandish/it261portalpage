<?php

define('THIS_PAGE', $_SERVER['REQUEST_URI']);

$assignments = [
    'MAMP' =>
    '/it261/website/week2/mamp.php',
    'Using a Switch' => '/it261/website/week3/switch.php',
    'Troubleshooting' => '/it261/website/week4/adder.php',
    'Calculator' => '/it261/website/week5/calculator.php',
    'Calculator-Days' => '/it261/website/week5/calculator-days.php',
    'Calculator-Days-Errors' => '/it261/website/week5/calculator-days-errors.php',
    'Calculator-Days-Errors-Sticky' => '/it261/website/week5/calculator-days-errors-sticky.php',
    'Emailable Form' => '/it261/website/contact.php',
    'Table of Images' => '/it261/website/gallery.php',
    'Database' => '/it261/website/destinations.php',
    'Login and Register' => '',
    "Added points/lost points" => ''
];

function week_menu($array) {
    foreach($array as $name => $url) {
        echo "<p><a href='$url'>$name</a></p>";
    }
}

$week2 = [
    'var.php' => '/it261/weeks/week2/var.php',
    'var2.php' => '/it261/weeks/week2/var2.php',
    'currency.php' => '/it261/weeks/week2/currency.php',
    'heredoc.php' => '/it261/weeks/week2/heredoc.php'
];

$week3 = [
    'foreach.php' => '/it261/weeks/week3/foreach.php',
    'forloop.php' => '/it261/weeks/week3/forloop.php',
    'if.php' => '/it261/weeks/week3/if.php',
    'switch.php' => '/it261/weeks/week3/switch.php',
    'data-types.php' => '/it261/weeks/week3/data-types.php',
    'date.php' => '/it261/weeks/week3/date.php',
];

$week4 = [
    'form1.php' => '/it261/weeks/week4/form1.php',
    'form2.php' => '/it261/weeks/week4/form2.php',
    'login-basic.php' => '/it261/weeks/week4/login-basic.php',
    'celcius-form.php' => '/it261/weeks/week4/celcius-form.php',
];

$week5 = [
    'currency1.php' => '/it261/weeks/week5/currency1.php',
    'currency1a.php' => '/it261/weeks/week5/currency1a.php',
    'currency2.php' => '/it261/weeks/week5/currency2.php',
    'currency3.php' => '/it261/weeks/week5/currency3.php',
    'currency4.php' => '/it261/weeks/week5/currency4.php',
    'login2.php' => '/it261/weeks/week5/login2.php'
];

$week6 = [
    'form1.php' => '/it261/weeks/week6/form1.php',
    'form2.php' => '/it261/weeks/week6/form2.php',
    'form3.php' => '/it261/weeks/week6/form3.php',
    'form4.php' => '/it261/weeks/week6/form4.php',
    'functions.php' => '/it261/weeks/week6/functions.php',
    'implode.php' => '/it261/weeks/week6/implode.php',
    'index.php' => '/it261/weeks/week6/index.php',
    'thanks.php' => '/it261/weeks/week6/thanks.php',
];

$week7 = [
    'random.php' => '/it261/weeks/week7/random.php',
    'substring.php' => '/it261/weeks/week7/substring.php',
];

$week8 = [
    'people.php' => '/it261/weeks/week8/people.php',
    'people-view.php' => '/it261/weeks/week8/people-view.php'
];

$nav2 = [
    "Home" => '/it261/website/index.php',
    "About" => 'about.php',
    "Gallery" => '/it261/website/gallery.php',
    "Contact" => '/it261/website/contact.php',
    "Daily" => '/it261/website/week3/switch.php',
    "Destinations" => '/it261/website/destinations.php'
];

$photos = [
    'image1',
    'image2',
    'image3',
    'image4',
    'image5',
    'image6',
    'image7',
    'image8',
    'image9',
    'image10',
    'image11'
];

$gallery = [
    'Burger_King.jpg' => "برجر كنج",
    'Kentucky_Fried_Chicken.jpg' => "دجاج كنتاكي",
    "Papa_John's.jpg" => "بابا جونز",
    "Pepsi,_Fanta,_and_CocaCola.jpg" => "بيبسي، فانتا، وكوكاكولا",
    "Pizza_Hut.jpg" => "بيتزا هت",
    "Popeyes.jpg" => "بوبايز"
];

function getPhoto($photos) {
    $i = rand(0, 10);
    $selected_image = "/it261/website/images/{$photos[$i]}.jpg";

    return "<img src='$selected_image' alt='{$photos[$i]}'>";
}



?>