<!DOCTYPE html>
<html lang="en">
<?php
include 'days.php';
date_default_timezone_set('America/Los_Angeles');
if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}
switch ($today) {
    case 'Sunday':
        $day = $days['sunday'];
        break;
    case 'Monday':
        $day = $days['monday'];
        break;
    case 'Tuesday':
        $day = $days['tuesday'];
        break;
    case 'Wednesday':
        $day = $days['wednesday'];
        break;
    case 'Thursday':
        $day = $days['thursday'];
        break;
    case 'Friday':
        $day = $days['friday'];
        break;
    case 'Saturday':
        $day = $days['saturday'];
        break;
}
?>

<head>
    <title>Sarah Standish</title>
    <link href="../../css/styles.css" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Syne:wght@400;500&display=swap" rel="stylesheet"> 
    <style>
        * {
            --background-color: <?php echo $day['background_color'] ?>;
            --text-color: <?php echo $day['text_color'] ?>;
            --accent-color-1: <?php echo $day['accent_color'] ?>;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .recipe {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 1200px;
            margin: 0 auto;
        }
        .text {
            width: 50%;
            font-size: 1.25em;
            line-height: 1.5em;
            padding: 5px;
        }
        .image {
            width: 50%;
        }
        img {
            max-width: 90%;
        }
        a {
            text-decoration: none;
            color: var(--text-color);
        }
        a:hover {
            text-decoration: none;
            color: var(--accent-color-1);
        }
    </style>
</head>

<body>

<?php
include '../../includes/nav.php';
include '../../includes/header.php';
echo $header;
?>
<h2><?php echo $day['day_name'] . ": ";
echo "<a href='$day[recipe_url]' target='_blank'>" . $day['recipe_name'] . "</a>"?></h2>
<div class="recipe">
    <div class="text">
        <p>
        <?php echo $day['descriptive_text'] ?>
        </p>
    </div>
    <div class="image">
        <a href="<?php echo $day['recipe_url']?>" target="_blank">
            <img src='<?php echo $day['image_url']?>' alt="<?php echo $day['recipe_name']?>">
        </a>
    </div>
</div>
<footer>
<h2>Check out our daily recipes!</h2>
    <ul>
        <li><a href="switch.php?today=Sunday">Sunday</a></li>
        <li><a href="switch.php?today=Monday">Monday</a></li>
        <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
        <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
        <li><a href="switch.php?today=Thursday">Thursday</a></li>
        <li><a href="switch.php?today=Friday">Friday</a></li>
        <li><a href="switch.php?today=Saturday">Saturday</a></li>
    </ul>
</footer>
<?php
include '../../includes/footer.php';
footer();
?>


</body>