<?php
// session_start() starts a session that will remember a user's information as long as they are on the site
// mysquli_real_espace_string // reformats strings for the database
// md5() encrypts the passwords for the database

session_start();

include 'config.php';

// initialize variables

$FirstName = '';
$LastName = '';
$Email = '';
$UserName = '';
$errors = [];
$success = "You are now logged in.";

// connect to the database
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

if (isset($_POST['RegisterUser'])) {
    //assign variables
    $FirstName = mysqli_real_escape_string($db, $_POST['FirstName']);
    $LastName = mysqli_real_escape_string($db, $_POST['LastName']);
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
    $UserName = mysqli_real_escape_string($db, $_POST['UserName']);
    $Password1 = mysqli_real_escape_string($db, $_POST['Password1']);
    $Password2 = mysqli_real_escape_string($db, $_POST['Password2']);

    if (empty($FirstName)) {
        array_push($errors, 'First name is required.');
    }

    if (empty($LastName)) {
        array_push($errors, 'Last name is required.');
    }

    if (empty($UserName)) {
        array_push($errors, 'Username is required.');
    }

    if (empty($Email)) {
        array_push($errors, 'Email is required.');
    }

    if (empty($Password1)) {
        array_push($errors, 'Password is required.');
    }

    if ($Password1 != $Password2) {
        array_push($errors, 'Passwords do not match.');
    }

    $user_check_query = "SELECT * FROM users WHERE UserName = '$UserName' OR Email = '$Email' LIMIT 1"; // select the first record where either username or email matches

    $result = mysqli_query($db, $user_check_query) or die(myError(__FILE__, __LINE__, mysqli_error($db)));

    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['UserName'] == $UserName) {
            array_push($errors, "Username already exists.");
        }
        if ($user['Email'] == $Email) {
            array_push($errors, "This email has already been registered.");
        }
    }

    if (empty($errors)) {
        $Password = md5($Password1);

        $query = "INSERT INTO users (FirstName, LastName, UserName, Email, Password) VALUES ('$FirstName', '$LastName', '$UserName', '$Email', '$Password' )";

        mysqli_query($db, $query);
    
        $_SESSION['UserName'] = $UserName;
        $_SESSION['success'] = $success;
    
        header('Location:login.php');
    }
}

if (isset($_POST['LoginUser'])) {
    //assign variables
    $UserName = mysqli_real_escape_string($db, $_POST['UserName']);
    $Password = mysqli_real_escape_string($db, $_POST['Password']);

    if (empty($UserName)) {
        array_push($errors, 'Username is required.');
    }

    if (empty($Password)) {
        array_push($errors, 'Password is required.');
    }

    if (empty($errors)) {
        $Password = md5($Password);

        $query = "SELECT * FROM users WHERE UserName = '$UserName' AND Password = '$Password'";

        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {

            $_SESSION['UserName'] = $UserName;
            $_SESSION['Success'] = $success;

            header('Location:index.php');

        } else {
            array_push($errors, "<p class='red'>Wrong username or password.</p>");
        }
    }
}

?>