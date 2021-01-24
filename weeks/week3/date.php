<?php
//Date

echo date('Y');
echo "<br>";
//24 hr clock
echo date('H:i A');
echo "<br>";
//12 hr clock
echo date('h:i A');
date_default_timezone_set('America/Los_Angeles');
echo "<br>";
echo date('h:i A');
echo "<br>";

$todayDate = date('H:i A');
if ($todayDate <= 11) {
    echo "Good morning";
} elseif ($todayDate <= 15) {
    echo "Good afternoon";
} else {
    echo "Good evening";
}

?>