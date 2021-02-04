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
        }
        form {
        width: 400px;
        margin: 0 auto;
    }

    label {
        /* display: block; */
        margin: 5px;
        padding: 10px;
    }

    input {
        /* display: block; */
        margin-bottom: 10px;
        padding: 10px;
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
    }

    response p {
        margin: 10px;
    }
    
    </style>
</head>
<body>
    <h2>Our Calculator</h2>
    <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?> method="post">
        <fieldset>
            <label for='name'>Your name:</label>
                <input type='text' name='name'>
                <br>
            <label for='miles'>How many miles will you drive?</label>
                <input type='text' name='miles'>
                <br>
            <label for='miles'>How many hours per day do you want to drive?</label>
                <input type='text' name='hours'>
                <br>
            <label>Price per gallon</label>
                <br>
                <input type='radio' name='price' value='3'>
                    <label for='price'>$3.00</label>
                    <br>
                <input type='radio' name='price' value='3.5'>
                    <label for='price'>$3.50</label>
                    <br>
                <input type='radio' name='price' value='4'>
                    <label for='price'>$4.00</label>
                    <br>
            <label>Fuel Efficiency</label>
                <br>
                <select name='efficiency'>
                    <option value='great'>Great</option>
                    <option value='good'>Good</option>
                    <option value='okay'>Okay</option>
                    <option value='bad'>Bad</option>
                    <option value='terrible'>Terrible</option>
                </select>
                <br>
            <input type='submit' name='submit' value='Submit'>
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>
    <div class='response'>
        <?php
        $efficiency_grades = [
            'great' => 60,
            'good' => 50,
            'okay' => 40,
            'bad' => 30,
            'terrible' => 20
        ];

        if (isset($_POST['submit'])) {
            if (empty($_POST['price']) || empty($_POST['miles']) || empty($_POST['name'] || empty($_POST['hours']))) {
                echo "<p>Please fill out all fields before pressing submit</p>";
            } elseif (!is_numeric($_POST['miles']) || !is_numeric($_POST['hours'])) {
                echo "<p>Miles and hours must be numbers</p>";
            } elseif (isset($_POST['miles'], $_POST['price'], $_POST['efficiency'], $_POST['name'], $_POST['hours'])) {
                $miles = $_POST['miles'];
                $price = $_POST['price'];
                $efficiency_selection = $_POST['efficiency'];
                $name = $_POST['name'];
                $hours = $_POST['hours'];
                $efficiency = $efficiency_grades[$efficiency_selection];
                $cost = round($miles / $efficiency * $price, 2);
                $total_hours = round($miles / 60, 2);
                function getDays($total_hours, $hours) {
                    $days = ceil($total_hours / $hours);
                    if ($days == 1) {
                        return 'one day';
                    } else {
                        return strval($days) . ' days';
                    }
                }
                $days = getDays($total_hours, $hours);
                echo "<p>$name, you're planning to drive $miles miles.<br>Your car has a $efficiency_selection fuel efficiency rating with $efficiency mpg.<br>Your total cost for gas will be $$cost.<br>Your will be driving for a total of $total_hours hours and the trip will take you $days.";
            }
        }
        ?>
    </div>
</body>
</html>