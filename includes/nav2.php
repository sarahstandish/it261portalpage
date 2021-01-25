<nav>
    <?php
        include 'config.php';
        foreach($nav2 as $name => $url) {
            if (THIS_PAGE == $url) {
                echo "<div class='dropdown-container nav-button'><a class='home-active' href='$url'>$name</a></div>";
            } else {
                echo "<div class='dropdown-container nav-button'><a href='$url'>$name</a></div>";
            }
        }
        ?>
</nav>