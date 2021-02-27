<?php
include 'config.php';
$sql = 'SELECT * FROM week_8_people';

// $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// $link = mysqli_init();

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql);

if (mysqli_num_rows($result) > 0) {

    while ($row=mysqli_fetch_assoc($result)) {
        //this array will display the contents of the row
        echo "<ul>";
        echo "<li>For more information about <a href='people-view.php?id={$row['week_8_people_id']}'>{$row['first_name']} {$row['last_name']}</a></li>";
        echo "<li><b>First name:</b> {$row['first_name']}</li>";
        echo "<li><b>Last name:</b> {$row['last_name']}</li>";
        echo "<li><b>Occupation:</b> {$row['occupation']}</li>";
        echo "</ul>";
    }
} else {
    echo "Nobody home";
}
//release the web server
mysqli_free_result($result);

//close the connection
mysqli_close($iConn);

?>