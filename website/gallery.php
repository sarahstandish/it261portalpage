<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gallery</title>
    <link href="/it261/css/styles.css" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Syne:wght@400;500&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Lateef&display=swap" rel="stylesheet"> 
<style>
    td img {
        display: block;
        max-height: 150px;
        border: 2px solid var(--text-color);
        text-align: center;
        margin-bottom: 5px;
        margin-bottom: 5px;
    }
    table {
        font-family: var(--body-font);
        margin: 0 auto;
        font-size:
        1.5em;
    }
    td {
        padding: 10px;
        text-align: center;
    }
    h2 {
        text-align: center;
        margin: 0 auto;
        padding: 10px;
    }
    .arabic {
        font-family: "Lateef";
        font-size: 2em;
    }
</style>
</head>
<body>
    <?php 
    // include '../includes/config.php';
    include '../includes/nav2.php';
    include '../includes/header.php';
    include '../includes/footer.php';
    ?>
    <?php echo $header?>
    <h2>Major Brand Logos in Arabic</h2>
    <table>
        <?php foreach ($gallery as $image => $arabic_name):
            $restaurant_name = str_replace('.jpg', '', str_replace("_", " ", $image));
        ?>
        <tr>
            <td><img src="/it261/website/images/<?php echo $image ?>" alt="<?php echo "$restaurant_name logo in Arabic";?>"></td>
            <td><?php echo $restaurant_name?></td>
            <td class="arabic"><?php echo $arabic_name; ?></td>
        </tr>

        <?php endforeach ?>

    </table>
    <?php footer() ?>
</body>
</html>