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
            <label for='miles'>How many miles will you drive?</label>
                <input type='text' name='miles'>
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
            if (empty($_POST['price']) || empty($_POST['miles'])) {
                echo "<p>Please fill out all fields before pressing submit</p>";
            } elseif (isset($_POST['miles'], $_POST['price'], $_POST['efficiency'])) {
                $miles = $_POST['miles'];
                $price = $_POST['price'];
                $efficiency_selection = $_POST['efficiency'];
                $efficiency = $efficiency_grades[$efficiency_selection];
                $cost = $miles / $efficiency * $price;
                echo "<p>You're planning to drive $miles miles. Your car has a $efficiency_selection fuel efficiency rating with $efficiency mpg. Your total cost for gas will be $$cost.";
            }
        }
        ?>
    </div>
</body>
</html>