<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav = [
    'Home' => 'index.php',
    'About' => 'about.php',
    'Daily' => 'daily.php',
    'People' => 'people.php',
    'Contact' => 'contact.php',
    'Gallery' => 'gallery.php'
];

function makeLinks($nav) {

    $return = "";

    foreach($nav as $title => $filename) {
        if (THIS_PAGE == $filename) {
            $return .= "<li><a class='active' href=$filename>$title</a></li>";
        } else {
            $return .= "<li><a href=$filename>$title</a></li>";
        }
    }

    return $return;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Testing Index Page</title>
    <link href="/it261/css/styles.css" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Syne:wght@400;500&display=swap" rel="stylesheet">
    <link href= "css/styles.css" type="text/css" rel="stylesheet">
    <style>
        .active {
            color: red;
        }
    </style>
</head>
<body>
<h2>Test of Nav</h2>

    <nav>
        <ul>
            <?php echo makeLinks($nav);?>
        </ul>
    </nav>
</body>
</html>