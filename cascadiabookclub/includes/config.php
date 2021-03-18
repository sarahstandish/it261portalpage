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

?>