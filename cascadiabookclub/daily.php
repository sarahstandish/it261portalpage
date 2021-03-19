<?php
include 'includes/header.php';
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

list($title, $author, $year_published, $setting, $about, $category, $url) = get_book($day['id'], $db);

display_header("{$day['day_name']} Book Recommenation");

?>
<h2>Daily Book Recommendation: <?php echo $day['day_name'] ?></h2>
<div class="main">
    <div class="book-view-cover">
        <?php echo display_image($day['id'], $title); ?>
    </div>
    <div class="book-info">
        <p><?php echo $about ?></p>
        <p><?php echo "{$day['day_name']}'s recommendation is <em>$title</em> by $author, published in $year_published. This book is primarily set in $setting.";
        ?></p>
    </div>

</div>
<footer>
<h2>Check out our daily book recommendations!</h2>
    <ul>
        <li><a href="daily.php?today=Sunday">Sunday</a></li>
        <li><a href="daily.php?today=Monday">Monday</a></li>
        <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
        <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
        <li><a href="daily.php?today=Thursday">Thursday</a></li>
        <li><a href="daily.php?today=Friday">Friday</a></li>
        <li><a href="daily.php?today=Saturday">Saturday</a></li>
    </ul>
</footer>
<?php
include 'includes/footer.php';
?>