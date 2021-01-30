
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="/it261/css/styles.css" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Syne:wght@400;500&display=swap" rel="stylesheet"> 
    <title>My Adder Assignment</title>
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
        display: block;
        margin-bottom: 5px;
    }

    input {
        display: block;
        margin-bottom: 10px;
        padding: 5px;
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
    
    </style>
</head>
<body>
    <?php include '../../includes/nav.php' ?>
    <?php include '../../includes/header.php'; echo $header ?>
    <h2>Adder.php</h2> 
    <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?> method="post">
        <fieldset>
            <label for="num1">Enter the first number:</label>
                <input type="text" name='num1' id='num1'><br>
            <label for="num2">Enter the second number:</label>
                <input type="text" name='num2' id="num2"><br>
            <input type="submit" name="submit" value="Add Em!!">
        </fieldset>
    </form>
    <div class="response">
    <?php
    if (isset($_POST['num1'], $_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        if (empty($num1) || empty($num2)) {
            echo "<p>Please fill out all the fields.</p>";
        } else if (is_numeric($num1) && is_numeric($num2)) {
            $myTotal = $num1 + $num2;
            echo "<h2>You added $num1 and $num2.</h2>";
            echo "<p>and the answer is <br><span style='color:red;'>$myTotal</span>!</p>";
            echo "<p><a href=''>Reset page</a></p>";
        } else {
            echo "<p>You must enter two numbers.</p>";
        }
    }
    ?>
    </div>
    <?php include '../../includes/footer.php'; footer()?>

<!--here are my errors-->
<!--Added closing php tag on line 12-->
<!--Removed misplaced closing php tag on line 28-->
<!--Added missing <!DOCTYPE html>-->
<!--Added language attribute to html-->
<!--Added stylesheet reference to html-->
<!--Removed misplaced / from opening form tag -->
<!--Added missing quotation marks to input value-->
<!--Corrected caluclation for $mytotal; should be = not -= -->
<!--Fixed quotation marks & string interpolation in h2-->
<!--Added closing h2 tag-->
<!--Fixed quotation marks and string interpolation in presentation of answer-->
<!--Added closing semicolon line 9 to reset page instructions-->
<!--Removed //adder-wrong comment-->
<!--Added closing </p> tag to reset page instructions-->
<!--Got rid of frowny face at bottom of page-->
<!--Changed Num1 to num1 in input-->
<!--Changed Num2 to num1 in $mytotal calc -->
<!--Added condition that num2 must be set to submit form-->
<!--Fixed label html tags-->
<!--Added for attributes to labels-->
<!--Added poast method to form -->
<!--Added validation to check if values submitted are numeric -->
<!--Added validation to check if either field is empty -->
<!--Added additional styles-->

</body>
</html>
