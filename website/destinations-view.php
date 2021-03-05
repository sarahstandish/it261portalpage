<?php
include 'includes/config.php';
include 'includes/keys.php';
ob_start();

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:people.php');
}

$sql = "SELECT * FROM destinations_of_the_arab_world WHERE destination_id = $id";

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $attraction_name = stripslashes($row['attraction_name']);
        $country = stripslashes($row['country']);
        $about = stripslashes($row['about']);
        $photo_url = stripslashes($row['photo_permalink']);
        $photo_author = stripslashes($row['photo_author']);
        $currently_visitable = stripslashes($row['currently_visitable']);
        $latitude = stripslashes($row['latitude']);
        $longitude = stripslashes($row['longitude']);
        $feedback = "";
    }
} else {
    $feedback = "Nobody home.";
}
include 'includes/header.php';
display_header("Destinations");

if (empty($feedback)) {
    echo "<h2>$attraction_name</h2>
    <div class='destination-wrapper'>
    <img src='/it261/website/images/destinations$id.jpg'>
    <p><b>Country:</b> $country</p>
    <p><b>About:</b> $about</p>
    <p><b>Currently visitable?</b> $currently_visitable</p>
    <p><a href='$photo_url'>Image</a> by $photo_author</p>
    </div>";
}
?>
<div id='google_map'></div>
    <script>
        function myMap() {
            var mapProp = {
                center:new google.maps.LatLng(<?php echo $latitude ?>, <?php echo $longitude ?>),
                zoom: 5,
            };
            var map = new google.maps.Map(document.getElementById('google_map'), mapProp);
            var marker = new google.maps.Marker({
                position:new google.maps.LatLng(<?php echo $latitude ?>, <?php echo $longitude ?>),
            });
            marker.setMap(map);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google_api_key ?>&callback=myMap"></script>

<?php

include 'includes/footer.php';
?>