<!DOCTYPE html>
<html lang="en">
<?php
date_default_timezone_set('America/Los_Angeles');
$todayDate = date('H:i A');
include 'days.php';
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Syne:wght@400;500&display=swap" rel="stylesheet"> 
    <style>
        * {
            background-color: <?php echo $day['background_color'] ?>
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

<h2><?php echo $day['day_name']?></h2>
<div class="recipe">
    <div class="text">
    <p>
    <?php
        if ($todayDate <= 11) {
            echo "Good morning.";
        } elseif ($todayDate <= 15) {
            echo "Good afternoon.";
        } else {
            echo "Good evening.";
        }
    ?>
    </p>
        <p>
        <?php echo $day['descriptive_text'] ?>
        </p>
    </div>
    <div class="image">     
            <img src='<?php echo $day['image_url']?>' alt="<?php echo $day[day_name] ?>">
    </div>
    <br>
    <h2>Check out our daily photos!</h2>
    <ul>
        <li><a href="switch.php?today=Sunday">Sunday</a></li>
        <li><a href="switch.php?today=Monday">Monday</a></li>
        <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
        <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
        <li><a href="switch.php?today=Thursday">Thursday</a></li>
        <li><a href="switch.php?today=Friday">Friday</a></li>
        <li><a href="switch.php?today=Saturday">Saturday</a></li>
    </ul
</div>

</body>