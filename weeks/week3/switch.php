<!DOCTYPE html>
<html lang="en">
<?php
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
        <?php echo $day['descriptive_text'] ?>
        </p>
    </div>
    <div class="image">     
            <img src='<?php echo $day['image_url']?>' alt="<?php echo $day[day_name] ?>">
    </div>
</div>

</body>
?>