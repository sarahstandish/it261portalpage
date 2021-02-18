<?php

$first_name = "";
$last_name = "";
$email = "";
$recipe = "";
$dietary_restrictions = [];
$experience = "";
$comments = "";
$agree = "";
$post_array = "";
$phone = "";

$first_name_err = "";
$last_name_err = "";
$email_err = "";
$recipe_err = "";
$dietary_restrictions_err = "";
$experience_err = "";
$comments_err = "";
$agree_err = "";
$phone_err = "";

function mydietary_restrictions($array) {

    if (!empty($array)) {
        return implode(", ", $array);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['first_name'])) {
        $first_name_err = "Please enter your first name.";
    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty($_POST['last_name'])) {
        $last_name_err = "Please enter your last name.";
    } else {
        $last_name = $_POST['last_name'];
    }

    if (empty($_POST['email'])) {
        $email_err = "Please enter your email.";
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['recipe'])) {
        $recipe_err = "Please enter your recipe choice.";
    } else {
        $recipe = $_POST['recipe'];
    }

    if (empty($_POST['dietary_restrictions'])) {
        $dietary_restrictions_err = "Please specify your dietary restrictions.";
    } else {
        $dietary_restrictions[] = $_POST['dietary_restrictions'];
    }

    if ($_POST['experience'] == 'NULL') {
        $experience_err = "Please select your experience level.";
    } else {
        $experience = $_POST['experience'];
    }

    if (empty($_POST['comments'])) {
        $comments_err = "Please enter your comments.";
    } else {
        $comments = $_POST['comments'];
    }

    if (empty($_POST['agree'])) {
        $agree_err = "You must agree.";
    } else {
        $agree = $_POST['agree'];
    }

    if (empty($_POST['phone'])) {
        $phone_err = "Please enter your phone number.";
    } else if (array_key_exists('phone', $_POST)) {

        if (!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
            $phone_err = "Phone must be xxx-xxx-xxxx";
        } else {
            $phone = $_POST['phone'];
        }
        
    } else {
        $phone_err = "Nothing happened.";
    }

    // $post_array = $_POST;

   
    if (isset($_POST['first_name'],
                $_POST['last_name'],
                $_POST['email'],
                $_POST['recipe'],
                $_POST['dietary_restrictions'],
                $_POST['experience'],
                $_POST['comments'],
                $_POST['phone'],                
                $_POST['agree']) && $_POST['experience'] != 'NULL' && preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
        $to = 'standish.sm@gmail.com';
        date_default_timezone_set('America/Los_Angeles');
        $subject = "Test email " . date('m/d/y h:i:s A');
        $body = "Hello $first_name $last_name,\n Your email is $email.\n Your phone number is $phone.\n You have selected is $recipe.\n Your experience level is $experience.\n Your comments are $comments.\n Your dietary_restrictions are " . mydietary_restrictions($_POST['dietary_restrictions']);
        $headers = [
            'From' => 'no-reply@sarahstandish.com',
            'Reply-to' => 'standish.sm@gmail.com',
        ];

        mail($to, $subject, $body, $headers);
        header('Location:thanks.php');

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form 4</title>
    <link href="/it261/css/styles.css" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Syne:wght@400;500&display=swap" rel="stylesheet">
    <link href= "/it261/weeks/week6/css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <fieldset>
            <label>First Name</label>
                <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo (htmlspecialchars($_POST['first_name'])) ?>">
                <span class="error"><?php echo $first_name_err?></span>
            <label>Last Name</label>
                <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo (htmlspecialchars($_POST['last_name'])) ?>">
                <span class="error"><?php echo $last_name_err?></span>
            <label>Phone number</label>
                <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (isset($_POST['phone'])) echo (htmlspecialchars($_POST['phone'])) ?>">
                <span class="error"><?php echo $phone_err?></span>
            <label>Email</label>
                <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo (htmlspecialchars($_POST['email'])) ?>">
                <span class="error"><?php echo $email_err?></span>
            <label>recipe</label>
                <ul>
                    <li><input type="radio" name="recipe" value="Spiced Chickpea Stew With Coconut and Turmeric" <?php if (isset($_POST['recipe']) && $_POST['recipe'] == 'female') echo "checked='checked'" ?>> <a href="/it261/website/week3/switch.php?today=Sunday">Spiced Chickpea Stew With Coconut and Turmeric</a></li>
                    <li><input type="radio" name="recipe" value="Pork Meatballs with Ginger and Fish Sauce" <?php if (isset($_POST['recipe']) && $_POST['recipe'] == 'male') echo "checked='checked'" ?>><a href="/it261/website/week3/switch.php?today=Monday"> Pork Meatballs with Ginger and Fish Sauce</a></li>
                    <li><input type="radio" name="recipe" value="Caramelized Shallot Pasta" <?php if (isset($_POST['recipe']) && $_POST['recipe'] == 'nonbinary') echo "checked='checked'" ?>> <a href="/it261/website/week3/switch.php?today=Tuesday">Caramelized Shallot Pasta</a></li>
                    <li><input type="radio" name="recipe" value="other" <?php if (isset($_POST['recipe']) && $_POST['recipe'] == 'other') echo "checked='checked'" ?>> Other</li>
                </ul>
                <span class="error"><?php echo $recipe_err ?></span>
            <label>Favorite dietary_restrictions</label>
                <ul>
                    <li><input type="checkbox" name="dietary_restrictions[]" value="Cabernet" <?php if (isset($_POST['dietary_restrictions']) && in_array('Cabernet', $_POST['dietary_restrictions']) ) echo "checked='checked'"; ?>> Cabernet</li>
                    <li><input type="checkbox" name="dietary_restrictions[]" value="Merlot" <?php if (isset($_POST['dietary_restrictions']) && in_array('Merlot', $_POST['dietary_restrictions']) ) echo "checked='checked'"; ?>> Merlot</li>
                    <li><input type="checkbox" name="dietary_restrictions[]" value="Syrah" <?php if (isset($_POST['dietary_restrictions']) && in_array('Syrah', $_POST['dietary_restrictions']) ) echo "checked='checked'"; ?>> Syrah</li>
                    <li><input type="checkbox" name="dietary_restrictions[]" value="Pinot Noir" <?php if (isset($_POST['dietary_restrictions']) && in_array('Cabernet', $_POST['dietary_restrictions']) ) echo "checked='checked'"; ?>> Pinot Noir</li>
                </ul>
                <span class="error"><?php echo $dietary_restrictions_err?></span>

            <label>experiences</label>
                <select name="experience">
                    <option value="NULL">Select one</option>
                    <option value="Northwest" <?php if (isset($_POST['experience']) && $_POST['experience'] == 'Northwest') echo "selected='selected'" ?>>Northwest</option>
                    <option value="Northeast" <?php if (isset($_POST['experience']) && $_POST['experience'] == 'Northeast') echo "selected='selected'" ?>>Northeast</option>
                    <option value="Midwest" <?php if (isset($_POST['experience']) && $_POST['experience'] == 'Midwest') echo "selected='selected'" ?>>Midwest</option>
                    <option value="South" <?php if (isset($_POST['experience']) && $_POST['experience'] == 'South') echo "selected='selected'" ?>>South</option>
                    <option value="Southwest" <?php if (isset($_POST['experience']) && $_POST['experience'] == 'Southwest') echo "selected='selected'" ?>>Southwest</option>
                </select>
                <span class="error"><?php echo $experience_err ?></span>

            <label>Comments</label>
                <textarea name="comments"><?php if (isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
                <span class="error"><?php echo $comments_err?></span>
            <label>Agree</label>
                <ul>
                    <li><input type="radio" name="agree" value="agree" <?php if (isset($_POST['agree'])) echo "checked='checked'" ?>>Agree</li>
                </ul>
                <span class="error"><?php echo $agree_err?></span>
            <input type="submit" value="Submit">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>
    <div class="response">
        <pre>
            <?php print_r($post_array) ?>
        </pre>
    </div>
</body>
</html>