<?php
function footer() { 
    $page = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
    echo "<footer>
        <ul>
            <li>
                <a href='https://creativecommons.org/licenses/by-sa/4.0/' target='_blank'>CC BY-SA 4.0</a>
            </li>
            <li>
                <a href='http://validator.w3.org/nu/?doc=$page' target='_blank'>HTML VALID</a>
            </li>
            <li>
                <a href='https://jigsaw.w3.org/css-validator/validator?uri=$page' target='_blank'>CSS VALID</a>
            </li>
        </ul>
    </footer>";
    };
?>