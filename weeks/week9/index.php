<?php
include 'includes/server.php';
include 'includes/header.php';

if (!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = "You must log in first.";
    header('Location:login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location:login.php');
}
?>
<?php if (isset($_SESSION['Success'])) :?>
    <div class='success'>
    <h3><?php echo $_SESSION['Success'];
        unset($_SESSION['Success']); ?></h3>
    </div>
    <?php endif;

if (isset($_SESSION['UserName'])) :?>
    <div class="welcome-logout">
        <h3><?php echo "Hello, {$_SESSION['UserName']}"; ?>    
        </h3>
        <a href="index.php?logout='1'">Logout</a>
    </div>
    <?php endif ?>

<h2>Welcome to our home page</h2>



<?php include 'includes/footer.php' ?>