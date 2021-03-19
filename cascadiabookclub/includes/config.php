<?php

ob_start();
include 'credentials.php';

define('DEBUG', 'TRUE');

global $db;

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

function myError($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
    echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
        echo 'Error message: <b> '.$errorMsg.'</b>';
        die();
    }  else {
        echo ' Houston, we have a problem!';
        die();
    }   
}


function get_book($id, $db) {

    $result = get_sql_result($db, 'books', 'book_id', $id);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $title = stripslashes($row['title']);
            $author = stripslashes($row['author']);
            $year_published = stripslashes($row['year_published']);
            $setting = stripslashes($row['setting']);
            $about = stripslashes($row['about']);
            $category = stripslashes($row['category']);
            $url = stripslashes($row['url']);
            $feedback = "";
        }
    } else {
        $feedback = "Something went wrong";
    }

    //release the web server
    mysqli_free_result($result);

    if (!empty($feedback)) {
        return $feedback;
    } else {
        return [$title, $author, $year_published, $setting, $about, $category, $url];
    }

}

function get_table_length($table_name, $db) {

    $result = get_sql_result($db, $table_name);

    $num_rows = mysqli_num_rows($result);

    //release the web server
    mysqli_free_result($result);

    return $num_rows;
}

function get_sql_result($db, $table_name, $column_name="", $column_condition="") {

    if (!$column_condition) {
        $query = "SELECT * FROM $table_name";
    } else {
        $query = "SELECT * FROM $table_name WHERE $column_name = '$column_condition'";
    }

    $result = mysqli_query($db, $query) or die(myError(__FILE__, __LINE__, mysqli_error($db)));

    return $result;
}

//contact form checkoxes
function defaultUnchecked($n) {
    if (isset($_POST['regions']) && in_array($n, $_POST['regions'])) {
        return "checked='checked'";
    } else if (isset($_POST['regions']) && !in_array($n, $_POST['regions'])) {
        return "";
    } else {
        return "";
    }
}

//contact form errors
$region_error = "";
$post_array = "";
$first_name_err = "";
$last_name_err = "";
$email_err = "";
$agree_err = "";
$phone_err = "";
$frequency_err = "";

$top_10_photos = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // $post_array = $_POST;
    if (empty($_POST['first_name'])) {
        $first_name_err = "Please enter your first name";
    } else {
        $first_name = $_POST['first_name'];
    }

    if ($_POST['frequency'] == 'NULL') {
        $frequency_err = "Please select an email frequency.";
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

    if (empty($_POST['regions'])) {
        $region_error = "Please select at least once region.";
    } else {
        $regions = implode(",", $_POST['regions']);
    }

    if (empty($_POST['agree'])) {
        $agree_err = "You must agree.";
    } else {
        $agree = $_POST['agree'];
    }

    if (empty($_POST['phone'])) {
        $phone_err = "ERROR!!! Type in your phone number.";
    } else if (array_key_exists('phone', $_POST)) {

        if (!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
            $phone_err = "Phone must be xxx-xxx-xxxx";
        } else {
            $phone = $_POST['phone'];
        }
        
    } else {
        $phone_err = "Nothing happened.";
    }

    if (isset($_POST['first_name'],
                $_POST['last_name'],
                $_POST['email'],
                $_POST['phone'],
                $_POST['agree']) 
                && !empty($_POST['regions'])
                && $_POST['frequency'] != 'NULL'
                ) {

        $your_regions = "Your regions of interest:\n " . implode(" \n ", $_POST['regions']);

        $to = 'z.sisyphusrocks@gmail.com';
        date_default_timezone_set('America/Los_Angeles');
        $subject = "Test email " . date('m/d/y h:i:s A');
        $body = "Hello {$_POST['first_name']} {$_POST['last_name']},\n Your email is {$_POST['email']}.\n Your phone number is {$_POST['phone']}.\n You searched for photos of {$_POST['search_term']} taken in {$_POST['location']} of at least {$_POST['frequency']} frequency.\n $your_photos \n Email sent from sarahstandish.com - contact form.";
        $headers = [
            'From' => 'no-reply@sarahstandish.com',
            'Reply-to' => 'standish.sm@gmail.com',
        ];

        mail($to, $subject, $body, $headers);
        header('Location:/it261/cascadiabookclub/thanks.php');

    }
}

function display_image($id, $title) {

    return "<img src='/it261/cascadiabookclub/images/book$id.jpg' alt='$title'>";
}

// switch

$days = [
    'sunday' => [
        'day_name' => 'Sunday',
        'background_color' => '#7FB069',
        'text_color' => '#FFCA3A',
        'accent_color' => '#FBFBFF',
        'id' => 1,
    ],
    'monday' => [
        'day_name' => 'Monday',
        'background_color' => '#EAEFD3',
        'accent_color' => '#DCC48E',
        'text_color' => '#488B49',
        'id' => 2,
    ],
    'tuesday' => [
        'day_name' => 'Tuesday',
        'background_color' => '#FBFFFE',
        'text_color' => '#95190C',
        'accent_color' => '#E6AF2E',
        'id' => 3,
    ],
    'wednesday' => [
        'day_name' => 'Wednesday',
        'background_color' => '#2A9134',
        'text_color' => '#E6EBE0',
        'accent_color' => '#BA1F33',
        'id' => 4,
    ],
    'thursday' => [
        'day_name' => 'Thursday',
        'background_color' => '#F1E3F3',
        'text_color' => '#F18F01',
        'accent_color' => '#618B4A',
        'id' => 5,
    ],
    'friday' => [
        'day_name' => 'Friday',
        'background_color' => '#E7E5DF',
        'text_color' => '#AF3800',
        'accent_color' => '#60992D',
        'id' => 6,
    ],
    'saturday' => [
        'day_name' => 'Saturday',
        'background_color' => '#BBBBBF',
        'text_color' => '#566E3D',
        'accent_color' => '#46B1C9',
        'id' => 7,
    ],
];

?>