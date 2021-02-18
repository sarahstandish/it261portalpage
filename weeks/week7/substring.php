<?php 

$statement = 'The Presidential Election is around the corner.';

echo $statement;
echo "<br>";
echo substr($statement, 0);
echo "<br>";
echo substr($statement, 0, 4);
echo "<br>";
echo substr($statement, 0, 20);
echo "<br>";
echo substr($statement, -7);
echo "<br>";
echo substr($statement, -20, 6);
echo "<br>";
echo substr($statement, 14);

$statement2 = "This election will be the most important election in my lifetime.";
echo "<br>";
echo $statement2;
echo "<br>";
echo str_replace('my', '<strong>our</strong>', $statement2);
echo "<br>";
echo "<br>";
$people['Donald_Trump'] = 'trump_Former President from NY.';
$people['Joe_Biden'] = 'biden_President from PA.';
$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre_Senator from MA.';
$people['Kamala_Harris'] = 'harri_Vice President from CA.';
$people['Cory_Booker'] = 'booke_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_Transportation Secretary from IN.';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people['Julian_Castro'] = 'castr_Former Housing/Urban from TX.';
?>
<!doctype HTML>
<html>
<head>
    <title>My table of images</title>
    <meta charset='UTF-8'>
</head>
<body>
    <table>
        <?php 
        foreach ($people as $name => $image) : ?>
        <tr>
            <td><img src="/it261/weeks/week7/images/<?php echo substr($image, 0, 5); ?>.jpg" alt="<?php echo $name; ?>"></td>
            <td><?php echo str_replace('_', ' ', $name);?></td>
            <td><?php echo substr($image, 6)?></td>

        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>