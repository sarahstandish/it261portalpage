<?php
echo "<h2>Currency</h2>";
$rubles = 1000;
$sterling = 500;
$rubles_to_dollars = 0.013;
$sterling_to_dollars = 1.28;
$jordanian_dinars = 60;
$dinars_to_dollars = 1.41;
$canadian_dollars = 100;
$canadian_to_dollars = .79;
$pesos = 1050;
$pesos_to_dollars = 0.051;

?>

<!doctype html>
<html lang="en">
<body>
<table>
    <tr>
        <th>Currency</th>
        <th>Dollars</th>
    </tr>
    <tr>
        <td>Russian Rubles</td>
        <td>$<?php echo number_format($rubles * $rubles_to_dollars, 2)?></td>
    </tr>
    <tr>
        <td>British Pounds</td>
        <td>$<?php echo number_format($sterling * $sterling_to_dollars, 2)?></td>
    </tr>
    <tr>
        <td>Jordanian Dinars</td>
        <td>$<?php echo number_format($jordanian_dinars * $dinars_to_dollars, 2) ?></td>
    </tr>
    <tr>
        <td>Candian Dollars</td>
        <td>$<?php echo number_format($canadian_dollars * $canadian_to_dollars, 2)?></td>
    </tr>
    <tr>
        <td>Mexican Pesos</td>
        <td>$<?php echo number_format($pesos * $pesos_to_dollars, 2)?></td>
    </tr>
</table>
</body>
</html>