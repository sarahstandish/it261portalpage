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
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <fieldset>
            <label>Name:</label>
                <input type="text" name="name">
            <label>Are you a member?</label>
                <ul> 
                    <li><input type="radio" name="confirm" value="yes"> Yes</li>
                    <li><input type="radio" name="confirm" value="no"> No</li>
                </ul>
            <label>Password:</label>
                <input type="password" name="password">
            <input type="submit" value="Confirm">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>
    <div class="response">
        <?php 
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (empty($_POST['name'])) {
                    echo "<p>Please fill out your name.</p>";
                }
                if (empty($_POST['confirm'])) {
                    echo "<p>Please state your membership status.</p>";
                }
                if (empty($_POST['password'])) {
                    echo "<p>Please fill in your password.</p>";
                }
                if (isset($_POST['name'], $_POST['confirm'], $_POST['password'])) {
                    $name = $_POST['name'];
                    $confirm = $_POST['confirm'];
                    $password = $_POST['password'];

                    if ($confirm == 'yes') {
                        $yes = 'checked';
                    } else if ($confirm == 'no') {
                        $no = 'checked';
                    }

                    if ($confirm == 'yes' && $password == 'password') {
                        header('Location:index.php');
                    } else {
                        header('Location:member.com');
                    }
                }
            }
        ?>
    </div>
</body>
</html>