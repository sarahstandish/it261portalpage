<?php

include 'config.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:people.php');
}

$sql = "SELECT * FROM week_8_people WHERE week_8_people_id = $id";

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

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
?>

<h2>We have made it</h2>
<h3>You are on <?php echo $first_name ?>'s page</h3>
<?php 

if (empty($feedback)) {
    echo "<ul>";
    echo "Result is $result<br>";
    echo "Row is " . mysqli_fetch_assoc($result);
    echo "<br>$first_name";
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row;
        echo "after row";
        echo $first_name;
        echo $result;
    }
    echo "</ul>";
} else {
    echo $feedback;
}

?>