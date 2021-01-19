<?php

    function nav($index_file_path, $week2_file_path, $week3_file_path) {

    echo 
        "<nav>
        <div class=\"dropdown-container\">
            <div class=\"nav-button\"><a href=\"" . $index_file_path . "index.php\">Home</a></div>
        </div>
        <div class=\"dropdown-container\">
            <div class=\"nav-button dropdown-button\">Exercises</div>
            <div class=\"dropdown\">
                <p><a href=\"" . $week2_file_path . "var.php\" target=\"_blank\">Week 2</a></p>
                <p><a href=\"\">Week 3</a></p>
                <p><a href=\"\">Week 4</a></p>
                <p><a href=\"\">Week 5</a></p>
                <p><a href=\"\">Week 6</a></p>
                <p><a href=\"\">Week 7</a></p>
                <p><a href=\"\">Week 8</a></p>
            </div>
        </div>
        <div class=\"dropdown-container\">
            <div class=\"nav-button dropdown-button\">Assignments</div>
            <div class=\"dropdown\">
                <p><a href=\"" . $week2_file_path . "mamp.php\">MAMP</a></p>
                <p><a href=\"" . $week3_file_path . "switch.php\">Using a Switch</a></p>
                <p><a href=\"\">Troubleshooting</a></p>
                <p><a href=\"\">Group Adder</a></p>
                <p><a href=\"\">Calculating Form</a></p>
                <p><a href=\"\">Group Currency Form</a></p>
                <p><a href=\"\">Emailable Form</a></p>
                <p><a href=\"\">Adminer.org</a></p>
                <p><a href=\"\">Table of Images</a></p>
                <p><a href=\"\">Database</a></p>
                <p><a href=\"\">Login and Register</a></p>
                <p><a href=\"\">Added points/lost points</a></p>
            </div>
        </div>
    </nav>";
    }
?>