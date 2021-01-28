<?php
if (isset($_POST['name'], $_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo $name;
    echo "<br>";
    echo $email;
} else {
    echo "
    <form action='' method='post'>
        <label>Name</label>
        <input type='text' name='name'>
        <br><br>
        <label>Email</label>
        <input type='text' name='email'>
        <input type='submit' name='submit' value='Send'><br>
    </form>
    <p><a href=''>Reset</a></p>
    ";
}
?>

