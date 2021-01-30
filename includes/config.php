<?php

define('THIS_PAGE', $_SERVER['REQUEST_URI']);

$assignments = [
    'MAMP' =>
    '/it261/website/week2/mamp.php',
    'Using a Switch' => '/it261/website/week3/switch.php',
    'Troubleshooting' => '/it261/website/week4/adder.php',
    'Group Adder' => '',
    'Calculating Form' => '',
    'Group Currency Form' => '','Emailable Form' => '',
    'Adminer.org' => '',
    'Table of Images' => '',
    'Database' => '',
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

$nav2 = [
    "Home" => '/it261/website/index.php',
    "About" => 'about.php',
    "Gallery" => 'gallery.php',
    "Contact" => 'contact.php',
    "Daily" => 'daily.php',
];

switch(THIS_PAGE) {
    case '/it261/index.php':
}

?>