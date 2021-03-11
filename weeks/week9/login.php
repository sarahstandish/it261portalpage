<?php

include 'server.php';
include 'includes/header.php';

?>
<h2>Login</h2>

<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <fieldset>
        <label>Username</label>
            <input type="text" name="UserName" value="<?php if (isset($_POST['UserName'])) echo htmlspecialchars($_POST['UserName']) ?>">
        <label>Password</label>
            <input type='password' name='Password'>
        
        <button type="submit" class="btn" name="LoginUser">Login</button>
        
        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>

        <?php include 'includes/errors.php' ?>

    </fieldset>
</form>

<p class="center">Haven't registered? <a href="register.php">Register here</a></p>

<?php include 'includes/footer.php'; ?>