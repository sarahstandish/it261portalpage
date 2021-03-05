<?php
function display_header($title) {

    echo
    "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <title>$title</title>
        <link href='/it261/css/styles.css' type='text/css' rel='stylesheet'>
        <link href='/it261/website/css/styles.css' type='text/css' rel='stylesheet'>
        <link rel='preconnect' href='https://fonts.gstatic.com'>
        <link href='https://fonts.googleapis.com/css2?family=Montserrat&family=Syne:wght@400;500&display=swap' rel='stylesheet'> 
    </head>
    <body>
    <nav>";
    $nav2 = [
        "Home" => '/it261/website/index.php',
        "About" => 'about.php',
        "Gallery" => '/it261/website/gallery.php',
        "Contact" => '/it261/website/contact.php',
        "Daily" => '/it261/website/week3/switch.php',
        "Destinations" => '/it261/website/destinations.php'
    ];
        foreach($nav2 as $name => $url) {
            if ('THIS_PAGE' == $url) {
                echo "<div class='dropdown-container nav-button'><a class='home-active' href='$url'>$name</a></div>";
            } else {
                echo "<div class='dropdown-container nav-button'><a href='$url'>$name</a></div>";
            }
        }
    echo "</nav>
    <header>
                <h1>IT 261</h1>
    </header>";
}



?>