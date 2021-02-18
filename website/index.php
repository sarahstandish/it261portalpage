<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home page</title>
    <link href="/it261/css/styles.css" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Syne:wght@400;500&display=swap" rel="stylesheet">
    <style>
        .photo {
            margin: 0 auto;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php
    include '../includes/header.php';
    include '../includes/nav2.php';
    echo $header;
    ?>
    <div class="main">
        <div class="photo">
            <?php echo getPhoto($photos) ?>
        </div>
    </div>
    <?php
    include '../includes/footer.php';
    footer();
    ?>


</body>

</html> 