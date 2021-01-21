<?php
//heredoc

$species = "cats";

echo "<br>";
echo "<h2>Heredoc</h2>";

$content = <<<EOT
 Jessika Trancik, an associate professor of energy studies at M.I.T. who led the research, said she hoped the data would “help $species learn about how those upfront costs are spread over the lifetime of the car. This text is an example of a heredoc.” 
EOT;
echo $content;

?>