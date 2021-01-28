<!DOCTYPE html>
<html>
<head>
<title>form2</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
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
    }

    input[type=text], input[type=email] {
        width: 100%;
    }

    textarea {
        width: 100%;
        height: 100px;
    }

</style>

<body>
    <form action="" method="post">
        <fieldset>
            <label>First Name</label>
                <input type="text" name="first_name"></input>
                <br>
            <label>Last Name</label>
                <input type="text" name="last_name"></input>
                <br>
            <label>Email</label>
                <input type="text" name="email"></input>
                <br>
            <label>Comments</label>
            <textarea name="comments"></textarea>
            <br>
            <input type="submit" value="submit"></input>
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>
    <?php
        if (isset(
         $_POST['first_name'],
         $_POST['last_name'],
         $_POST['email'], 
         $_POST['comments']
        )) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email']; 
            $comments = $_POST['comments'];

            if (empty($first_name) || empty($last_name) || empty($email) || empty($comments) ) {
                echo "Please fill in all the fields.";
            } else {
                echo $first_name;
                echo "<br>";
                echo $last_name;
                echo "<br>";
                echo $email;
                echo "<br>";
                echo $comments;
                echo "<br>";
            }
        } else {
            echo "Please fill out the fields.";
        }


    ?>
</body>

</html> 
