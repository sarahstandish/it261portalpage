<?php
function footer($other_file_path) { 
    echo "<footer>
        <ul>
            <li>
                <a href=\"https://creativecommons.org/licenses/by-sa/4.0/\" target=\"_blank\">CC BY-SA 4.0</a>
            </li>
            <li>
                <a href=\"" . $other_file_path . "other/html_valid.pdf\" target=\"_blank\">HTML VALID</a>
            </li>
            <li>
                <a href=\"" . $other_file_path . "other/css_valid.pdf\" target=\"_blank\">CSS VALID</a>
            </li>
        </ul>
    </footer>";
    };
?>