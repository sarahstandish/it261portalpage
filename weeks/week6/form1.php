<?php

$first_name = "";
$last_name = "";
$email = "";
$gender = "";
$wines = [];
$region = "";
$comments = "";
$agree = "";
$post_array = "";

$first_name_err = "";
$last_name_err = "";
$email_err = "";
$gender_err = "";
$wines_err = "";
$region_err = "";
$comments_err = "";
$agree_err = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['first_name'])) {
        $first_name_err = "Please enter your first name";
    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty($_POST['last_name'])) {
        $last_name_err = "Please enter your last name";
    } else {
        $last_name = $_POST['last_name'];
    }

    if (empty($_POST['email'])) {
        $email_err = "Please enter your email";
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['gender'])) {
        $gender_err = "Please enter your gender";
    } else {
        $gender = $_POST['gender'];
    }

    if (empty($_POST['wines'])) {
        $wines_err = "What, no wines?";
    } else {
        $wines[] = $_POST['wines'];
    }

    if ($_POST['region'] == 'NULL') {
        $region_err = "Please select your region.";
    } else {
        $region = $_POST['region'];
    }

    if (empty($_POST['comments'])) {
        $comments_err = "Please enter your comments.";
    } else {
        $comments = $_POST['comments'];
    }

    if (empty($_POST['agree'])) {
        $agree_err = "You must agree.";
    } else {
        $agree = $_POST['agree'];
    }
    
    if (isset($_POST['first_name'],
                $_POST['last_name'],
                $_POST['email'],
                $_POST['gender'],
                $_POST['wines'],
                $_POST['region'],
                $_POST['comments'],
                $_POST['agree'])) {
        $to = 'olga.szemetylo@seattlecolleges.edu';
        date_default_timezone_set('America/Los_Angeles');
        $subject = "Test email " . date('m/d/y h:i:s A');
        $body = "Hello $first_name $last_name,\n Your email is $email. Your gender is $gender. Your region is $region. Your comments are $comments.\n Email sent from sarahstandish.com, Form 1.";

        mail($to, $subject, $body);
        header('Location:thanks.php');

        //$post_array = $_POST;

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form 1</title>
    <link href="/it261/css/styles.css" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Syne:wght@400;500&display=swap" rel="stylesheet">
    <link href= "css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <fieldset>
            <label>First Name</label>
                <input type="text" name="first_name">
                <span class="error"><?php echo $first_name_err?></span>
            <label>Last Name</label>
                <input type="text" name="last_name">
                <span class="error"><?php echo $last_name_err?></span>
            <label>Email</label>
                <input type="email" name="email">
                <span class="error"><?php echo $email_err?></span>
            <label>Gender</label>
                <ul>
                    <li><input type="radio" name="gender" value="female"> Female</li>
                    <li><input type="radio" name="gender" value="male"> Male</li>
                    <li><input type="radio" name="gender" value="nonbinary"> Nonbinary</li>
                    <li><input type="radio" name="gender" value="other"> Other</li>
                </ul>
                <span class="error"><?php echo $gender_err ?></span>
            <label>Favorite Wines</label>
                <ul>
                    <li><input type="checkbox" name="wines[]" value="Cabernet"> Cabernet</li>
                    <li><input type="checkbox" name="wines[]" value="Merlot"> Merlot</li>
                    <li><input type="checkbox" name="wines[]" value="Syrah"> Syrah</li>
                    <li><input type="checkbox" name="wines[]" value="Pinot Noir"> Pinot Noir</li>
                </ul>
                <span class="error"><?php echo $wines_err?></span>

            <label>Regions</label>
                <select name="region">
                    <option value="NULL">Select one</option>
                    <option value="Northwest">Northwest</option>
                    <option value="Northeast">Northeast</option>
                    <option value="Midwest">Midwest</option>
                    <option value="South">South</option>
                    <option value="Southwest">Southwest</option>
                </select>
                <span class="error"><?php echo $region_err ?></span>

            <label>Comments</label>
                <textarea name="comments"></textarea>
                <span class="error"><?php echo $comments_err?></span>
            <label>Agree</label>
                <ul>
                    <li><input type="radio" name="agree" value="agree">Agree</li>
                </ul>
                <span class="error"><?php echo $agree_err?></span>
            <input type="submit" value="Submit">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>
    <div class="response">
        <pre>
            <?php print_r($post_array) ?>
        </pre>
    </div>
</body>
</html>