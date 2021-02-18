<?php 
// include '../includes/config.php';
include '../includes/nav2.php';
include '../includes/header.php';
include '../includes/footer.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gallery</title>
    <link href="/it261/css/styles.css" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Syne:wght@400;500&display=swap" rel="stylesheet"> 
<style>
    td img {
        display: block;
        max-height: 150px;
        border: 2px solid var(--text-color);
        text-align: right;
        margin-bottom: 5px;
        margin-bottom: 5px;
    }
    table {
        font-family: var(--body-font);
        margin: 0 auto;
        font-size:
        1.5em;
    }
    h2 {
        text-align: center;
        margin: 0 auto;
        padding: 10px;
    }
</style>
</head>
<body>
    <?php echo $header?>
    <h2>Major Brand Logos in Arabic</h2>
    <table>
        <?php foreach ($gallery as $image) : ?>
        <tr>
            <td><img src="/it261/website/images/<?php echo $image ?>"</td>
            <td><?php echo str_replace('.jpg', '', $image)?></td>
        </tr>

        <?php endforeach ?>

    </table>
    <?php footer() ?>
</body>
</html>