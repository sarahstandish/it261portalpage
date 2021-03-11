<?php

include 'server.php';
include 'includes/header.php';

?>
<h2>Register today</h2>

<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <fieldset>
        <label>First Name</label>
            <input type="text" name="FirstName" value="<?php if (isset($_POST['FirstName'])) echo htmlspecialchars($_POST['FirstName']) ?>">
        <label>Last Name</label>
            <input type="text" name="LastName" value="<?php if (isset($_POST['LastName'])) echo htmlspecialchars($_POST['LastName']) ?>">
        <label>Email</label>
            <input type="email" name="Email" value="<?php if (isset($_POST['Email'])) echo htmlspecialchars($_POST['Email']) ?>">
        <label>Username</label>
            <input type="text" name="UserName" value="<?php if (isset($_POST['UserName'])) echo htmlspecialchars($_POST['UserName']) ?>">
        <label>Password</label>
            <input type='password' name='Password1'>
        <label>Confirm Password</label>
            <input type='password' name='Password2'>
        
        <button type="submit" class="btn" name="RegisterUser">Register</button>
        
        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>

        <?php include 'includes/errors.php' ?>

    </fieldset>
</form>
</div> 
<!-- end wrapper -->
<p class="center"><a href="login.php">Already a member? Please log in</a></p>

<?php include 'includes/footer.php' ?>