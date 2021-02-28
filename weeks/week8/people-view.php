<?php

include 'config.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:people.php');
}

$sql = "SELECT * FROM week_8_people WHERE week_8_people_id = $id";

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $first_name = stripslashes($row['first_name']);
        $last_name = stripslashes($row['last_name']);
        $email = stripslashes($row['email']);
        $birthdate = stripslashes($row['birthdate']);
        $occupation = stripslashes($row['occupation']);
        $description = stripslashes($row['description']);
        $feedback = "";
    }
} else {
    $feedback = "Nobody is home.";
}
include '../../website/includes/header.php';
display_header("People View");
?>

<body>
<div id="wrapper">
<main>
    <h2>We have made it</h2>
    <h2>You are on <?php echo $first_name ?>'s page</h2>
    <!-- <p>Name: <?php echo $first_name . " " . $last_name; ?></p>
    <p>Occupation: <?php echo $occupation ?></p>
    <p>Email: <?php echo $email ?></p>
    <p>Birthdate: <?php echo $birthdate ?></p> -->

<?php 
if (empty($feedback)) {
    echo "<ul>";
        echo "<li><b>First name:</b> $first_name</li>";
        echo "<li><b>Last name:</b> $last_name</li>";
        echo "<li><b>Occupation:</b> $occupation</li>";
        echo "<li><b>Email:</b> $email</li>";
        echo "<li><b>Birthdate:</b> $birthdate</li>";
    echo "</ul>";
    echo "<p>Description: $description</p>";
    echo "<p><a href='people.php' style='color:var(--accent-color-1)'>Return to our People page</a></p>";
} else {
    echo $feedback;
}

?>
</main>
    <aside>
        <?php
        if (empty($feedback)) {
            echo "<img src='/it261/weeks/week7/images/people$id.jpg' alt='Photo of $first_name $last_name'>";
        }
        ?>
    </aside>
</div>
</body>
<?php 
    mysqli_free_result($result);
    mysqli_close($iConn);
    include '../../website/includes/footer.php'; 
?>