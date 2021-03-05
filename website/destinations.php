<?php
include 'includes/config.php';
$sql = 'SELECT * FROM destinations_of_the_arab_world';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT) or die(myError(__FILE__,__LINE__, mysqli_connect_error())) ;

$result = mysqli_query($iConn, $sql);

include 'includes/header.php';
display_header("Destinations");
?>
<h2>Destinations of the Arab world</h2>
<ul class='destinations_list'>
<?php
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li class='destination'><a href='destinations-view.php?id={$row['destination_id']}'>{$row['attraction_name']}</a></li>";
    }
}
echo "</ul>";
//release the web server
mysqli_free_result($result);

//close the connection
mysqli_close($iConn);

include 'includes/footer.php';
?>