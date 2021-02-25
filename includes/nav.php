<?php

include 'config.php';

    echo 
        "<nav>
        <div class='dropdown-container'>
            <div class='nav-button'><a ";
            if (THIS_PAGE == "/it261/index.php" || THIS_PAGE == '/it261/website/index.php') {
                echo "class='home-active' ";
            }
            echo "href='/it261/index.php'>Home</a></div>
        </div>
        <div class='dropdown-container'>
            <div class='nav-button dropdown-button'>Exercises</div>
            <div class='exercises dropdown'>
                <p class='weekname'>Week 2</p>";
                week_menu($week2);
                echo "<p class='weekname'>Week 3</p>";
                week_menu($week3);
                echo "<p class='weekname'>Week 4</p>";
                week_menu($week4);
                echo "<p class='weekname'>Week 5</p>";
                week_menu($week5);
                echo "<p class='weekname'>Week 6</p>";
                week_menu($week6);
                echo "<p class='weekname'>Week 7</p>";
                week_menu($week7);
                echo "<p class='weekname'>Week 8</p>

            </div>
        </div>
        <div class='dropdown-container'>
            <div class='nav-button dropdown-button'>Assignments</div>
            <div class='dropdown'>";
            foreach($assignments as $name => $url) {
                if (THIS_PAGE == $url) {
                    echo "<p><a class= 'active' href='$url'>$name</a></p>";
                } else {
                    echo "<p><a href='$url'>$name</a></p>";
                }
            }
            echo "</div>
        </div>
    </nav>";
?>