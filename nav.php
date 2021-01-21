<?php

    function nav() {

    echo 
        "<nav>
        <div class='dropdown-container'>
            <div class='nav-button'><a href='/it261/index.php'>Home</a></div>
        </div>
        <div class='dropdown-container'>
            <div class='nav-button dropdown-button'>Exercises</div>
            <div class='dropdown'>
                <p class='weekname'>Week 2</p>
                <p><a href='/it261/weeks/week2/var.php' target='_blank'>var.php</a></p>
                <p><a href='/it261/weeks/week2/var2.php' target='_blank'>var2.php</a></p>
                <p><a href='/it261/weeks/week2/currency.php' target='_blank'>currency.php</a></p>
                <p><a href='/it261/weeks/week2/heredoc.php' target='_blank'>heredoc.php</a></p>
                <p class='weekname'>Week 3</p>
                <p><a href='/it261/weeks/week3/foreach.php' target='_blank'>foreach.php</a></p>
                <p><a href='/it261/weeks/week3/forloop.php' target='_blank'>forloop.php</a></p>
                <p><a href='/it261/weeks/week3/if.php' target='_blank'>if.php</a></p>
                <p><a href='/it261/weeks/week3/switch.php' target='_blank'>switch.php</a></p>
                <p class='weekname'>Week 4</p>
                <p class='weekname'>Week 5</p>
                <p class='weekname'>Week 6</p>
                <p class='weekname'>Week 7</p>
                <p class='weekname'>Week 8</p>

            </div>
        </div>
        <div class='dropdown-container'>
            <div class='nav-button dropdown-button'>Assignments</div>
            <div class='dropdown'>
                <p><a href='/it261/website/week2/mamp.php'>MAMP</a></p>
                <p><a href='/it261/website/week3/switch.php'>Using a Switch</a></p>
                <p><a href=''>Troubleshooting</a></p>
                <p><a href=''>Group Adder</a></p>
                <p><a href=''>Calculating Form</a></p>
                <p><a href=''>Group Currency Form</a></p>
                <p><a href=''>Emailable Form</a></p>
                <p><a href=''>Adminer.org</a></p>
                <p><a href=''>Table of Images</a></p>
                <p><a href=''>Database</a></p>
                <p><a href=''>Login and Register</a></p>
                <p><a href=''>Added points/lost points</a></p>
            </div>
        </div>
    </nav>";
    }
?>