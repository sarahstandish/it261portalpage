<?php
    $show = array(
        'Name' => "Handmaid's Tale",
        "Actor" => "Elizabeth Moss",
        "Genre" => "Drama",
        "Author" => "Margaret Atwood",
    );

    // foreach loop
    foreach($show as $key => $value) {
        echo "<em>$key</em>: $value <br>";
    };

    echo "<br>";

    $nav['index.php'] = 'Home';
    $nav['about.php'] = 'About';
    $nav['contact.php'] = 'Contact';
    $nav['gallery.php'] = 'Gallery';
?>

<!doctype html>
<html lang='en'>
<head>
    <title>For-Each Loop</title>
    <meta charset="UTF-8">
</head>

<ul>
    <?php
        foreach($nav as $url => $title) {
            echo "<li><a href='$url'>$title</a></li>";
        };
    ?>
</ul>


</html>