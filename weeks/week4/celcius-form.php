<!doctype html>
<html lang='en'>
<head>
    <title>Celcius Form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Syne:wght@400;500&display=swap" rel="stylesheet"> 
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background: beige;
    }

    form {
        width: 500px;
        margin: 30px auto;
    }

    fieldset {
        padding: 10px;
    }

    .cool {
        color: blue;
    }

    .not-cool {
        color: green;
    }

    .hot {
        color: red;
    }

    p {
        text-align: center;
    }

    input {
        display: block;
        margin-bottom: 5px;
    }

    legend {
        font-size: 1.2em;
    }

</style>

</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <fieldset>
            <legend>Our Celcius Form</legend>
            <label>Enter your celcius value</label>
            <input type="text" name="cel">
            <input type="submit" value="Convert">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['cel'])) {
            $cel = $_POST['cel'];
            $far = $cel * 9 / 5 + 32;

            if ($far <= 32) {
                echo "<p class='cool'>$far degrees Fahrenheit is very cold.</p>";
            } else if ($far <= 50) {
                echo "<p class='not-cool'>$far degrees Fahrenheit is not that cold.</p>";
            } else {
                echo "<p class='hot'>$far degrees Fahrenheit is warm.</p>";
            }
        }
    }
?>
</body>
</html>