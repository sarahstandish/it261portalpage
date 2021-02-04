<!DOCTYPE html>
<html lang="en">
<head>
    <link href="/it261/css/styles.css" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Syne:wght@400;500&display=swap" rel="stylesheet"> 
    <title>Calculator</title>
    <style>
    * {
            color: var(--text-color)
        }
        h2 {
            color: var(--text-color);
        }
        p {
            color:  var(--text-color);
        }
        label {
            font-family: var(--body-font);
            display: block;
            margin: 5px;
        }
        form {
        width: 400px;
        margin: 0 auto;
        }
        input {
            color: var(--background-color)
        }

        h1, h2 {
            text-align: center;
            margin: 20px;
        }

        fieldset {
            border: 5px solid var(--accent-color-1);
            padding: 10px;
        }

        .response {
            margin: 0 auto;
            text-align: center;
            padding: 10px;
        }

        response p {
            margin: 10px;
        }

        input[type=text] {
            width: 100%;
            margin-bottom: 10px;
        }

        input[type=submit] {
            display: block;
            margin: 10px 0px;
            min-width: 75px;
        }
        
        form ul {
            margin-left: 20px;
            list-style-type: none;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php 
        include '../../includes/nav.php';
        include '../../includes/header.php';
        echo $header;
    ?>
    <h2>Our Calculator</h2>
    <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?> method="post">
        <fieldset>
            <label for='miles'>How many miles will you drive?</label>
                <input type='text' name='miles'>
            <label>Price per gallon</label>
                <ul>
                    <li><input type='radio' name='price' value='3'>$3.00</li>
                    <li><input type='radio' name='price' value='3.5'>$3.50</li>
                    <li><input type='radio' name='price' value='4'>$4.00</li>
                </ul>
            <label>Fuel Efficiency</label>
                <select name='efficiency'>
                    <option value='NULL'>Select an efficiency</option>
                    <option value='great'>Great</option>
                    <option value='good'>Good</option>
                    <option value='okay'>Okay</option>
                    <option value='bad'>Bad</option>
                    <option value='terrible'>Terrible</option>
                </select>
            <input type='submit' name='submit' value='Submit'>
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>
    <div class='response'>
        <?php
        $efficiency_grades = [
            'great' => 50,
            'good' => 40,
            'okay' => 30,
            'bad' => 20,
            'terrible' => 10
        ];

        if (isset($_POST['submit'])) {
            if (empty($_POST['price']) || empty($_POST['miles']) || $_POST['efficiency'] == 'NULL' || !is_numeric($_POST['miles'])) {
                echo "<p>Please fill out all fields before pressing submit. Miles driven must be a number.</p>";
            } elseif (isset($_POST['miles'], $_POST['price'], $_POST['efficiency'])) {
                $miles = $_POST['miles'];
                $price = $_POST['price'];
                $efficiency_selection = $_POST['efficiency'];
                $efficiency = $efficiency_grades[$efficiency_selection];
                $cost = number_format($miles / $efficiency * $price, 2);
                echo "<p>You're planning to drive $miles miles.</p>
                <p>Your car has a $efficiency_selection fuel efficiency rating with $efficiency mpg.</p>
                <p>Your total cost for gas will be $$cost.</p>";
            }
        }
        ?>
    </div>
    <?php 
        include '../../includes/footer.php';
        footer(); 
    ?>
</body>
</html>