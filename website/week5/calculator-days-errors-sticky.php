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
            /* display: block; */
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

        .error {
            border: 3px solid var(--accent-color-1);
            padding: 5px;
            margin: 5px auto;
            max-width: 300px;
            text-align: center;
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
            <label for='name'>Your name:</label>
                <input type='text' name='name' value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
            <label for='miles'>How many miles will you drive?</label>
                <input type='text' name='miles' value="<?php if (isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']); ?>">
            <label for='hours'>How many hours per day do you want to drive?</label>
                <input type='text' name='hours' value="<?php if (isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']); ?>">
            <label>Price per gallon</label>
            <ul>
                <li><input type='radio' name='price' value='3' <?php if (isset($_POST['price']) && $_POST['price'] == '3') echo "checked='checked'" ?>> $3.00</li>
                <li><input type='radio' name='price' value='3.5' <?php if (isset($_POST['price']) && $_POST['price'] == '3.5') echo "checked='checked'" ?>> $3.50</li>
                <li><input type='radio' name='price' value='4' <?php if (isset($_POST['price']) && $_POST['price'] == '4') echo "checked='checked'" ?>> $4.00</li>
            </ul>
            <label>Fuel Efficiency</label>
                <select name='efficiency'>
                    <option value='NULL'>Select an efficiency</option>
                    <option value='great' <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == 'great') echo "selected" ?>>Great</option>
                    <option value='good'<?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == 'good') echo "selected" ?>>Good</option>
                    <option value='okay' <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == 'okay') echo "selected" ?>>Okay</option>
                    <option value='bad' <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == 'bad') echo "selected" ?>>Bad</option>
                    <option value='terrible' <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == 'terrible') echo "selected" ?>>Terrible</option>
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
            if (empty($_POST['name'])) {
                echo "<p class='error'>Please enter your name.</p>";
            } 

            if (empty($_POST['price'])) {
                echo "<p class='error'>Please select a price.</p>";
            } 

            if (empty($_POST['miles'])) {
                echo "<p class='error'>Please enter your expected mileage.</p>";
            }

            if (!empty($_POST['miles']) && !is_numeric($_POST['miles'])) {
                echo "<p class='error'>Miles must be a number.</p>";
            }

            if (empty($_POST['hours'])) {
                echo "<p class='error'>Please enter how many hours you wish to drive.</p>";
            }

            if (!empty($_POST['hours']) && (!is_numeric($_POST['hours']) || $_POST['hours'] == 0)) {
                echo "<p class='error'>Hours must be a number and cannot be zero.</p>";
            }

            if ($_POST['efficiency'] == 'NULL') {
                echo "<p class='error'>Please select a fuel efficiency.</p>";
            }

            if (isset($_POST['miles'], $_POST['price'], $_POST['efficiency'], $_POST['name'], $_POST['hours']) && $_POST['efficiency'] != 'NULL' && !empty($_POST['hours']) && !empty($_POST['miles'])) {
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
                echo "<p>$name, you're planning to drive $miles miles.</p>
                <p>Your car has a $efficiency_selection fuel efficiency rating with $efficiency mpg.</p>
                <p>Your total cost for gas will be $$cost.</p>
                <p>Your will be driving for a total of $total_hours hours and the trip will take you $days.</p>";
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