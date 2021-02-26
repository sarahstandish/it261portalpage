<?php

ob_start();
include 'includes/config.php';
include 'includes/keys.php';

$license_error = "";
$location_error = "";
$post_array = "";
$first_name_err = "";
$last_name_err = "";
$email_err = "";
$agree_err = "";
$phone_err = "";
$search_term_err = "";
$dpi_err = "";

$top_10_photos = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // $post_array = $_POST;
    if (empty($_POST['first_name'])) {
        $first_name_err = "Please enter your first name";
    } else {
        $first_name = $_POST['first_name'];
    }

    if ($_POST['dpi'] == 'NULL') {
        $dpi_err = "Please select a minimum dpi.";
    }

    if (empty($_POST['search_term'])) {
        $search_term_err = "Please enter a search term.";
    } else {
        $search_term = urlencode($_POST['search_term']);
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

    if (empty($_POST['licenses'])) {
        $license_error = "Please select at least once license.";
    } else {
        $licenses = implode(",", $_POST['licenses']);
    }

    if (empty($_POST['location'])) {
        $location_error = "Please enter a location";
    } else {
        $lat_and_lng = get_lat_and_lng($google_api_key, $_POST['location']);
        $latitude = $lat_and_lng[0];
        $longitude = $lat_and_lng[1];
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

    if (isset($_POST['search_term'],
                $_POST['location'],
                $_POST['first_name'],
                $_POST['last_name'],
                $_POST['email'],
                $_POST['phone'],
                $_POST['agree']) 
                && !empty($_POST['licenses'])
                && $_POST['dpi'] != 'NULL'
                ) {

        $photo_array = get_photo_array($flickr_api_key, $search_term, $latitude, $longitude, $licenses);
        $top_10_photos = display_photos($photo_array, $flickr_api_key);
        $your_photos = (empty($top_10_photos)) ? "No photos matched your search." : "Your photos:\n " . implode(" \n ", array_keys($top_10_photos));

        $to = 'oszemeo@mystudentswa.com';
        date_default_timezone_set('America/Los_Angeles');
        $subject = "Test email " . date('m/d/y h:i:s A');
        $body = "Hello {$_POST['first_name']} {$_POST['last_name']},\n Your email is {$_POST['email']}.\n Your phone number is {$_POST['phone']}.\n You searched for photos of {$_POST['search_term']} taken in {$_POST['location']} of at least {$_POST['dpi']} dpi.\n $your_photos \n Email sent from sarahstandish.com - contact form.";
        $headers = [
            'From' => 'no-reply@sarahstandish.com',
            'Reply-to' => 'standish.sm@gmail.com',
        ];

        mail($to, $subject, $body, $headers);
        header('Location:/it261/weeks/week6/thanks.php');

    }
}
    include 'includes/header.php';
    echo display_header('Contact');
    include 'includes/form.php';
    include 'includes/footer.php'
    ?>
</html>