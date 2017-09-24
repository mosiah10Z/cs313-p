<!DOCTYPE html>
<html>

<body>
    <?php
$list = $_POST['input6'];

$ar = explode(", ",$list);
 sort($ar);
    $arrlength = count($ar);
    echo "<table>";
    for($x = 0; $x < $arrlength; $x++) {
     echo "<tr><td>";
        echo $ar[$x];
    echo "</td></tr>";
}
    echo "</table>"
?>

</body>

</html>
