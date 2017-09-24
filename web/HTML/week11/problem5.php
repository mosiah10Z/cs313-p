<!DOCTYPE html>
<html>

<body>
    <?php
$x = $_POST["x"];
    $y = $_POST["n"];
  $z = $x;
    
function powerUp($a, $b) {
    $c = $a;
    echo '<table border="1px">' . "<tr><th>x^n</th><th>answer</th></tr><tr>";
    echo "<tr><td>" . $a . "^1</td>"; 
        echo "<td>" . $c . "</td></tr>";
   
    for ($i = 2; $i < $b + 1; $i++){
        $c = $c * $a;
        echo "<tr><td>" . $a . "^" . $i . "</td>"; 
        echo "<td>" . $c . "</td></tr>";
    }
    echo "</table>";
   // return $c;
}    
   echo powerUp($x, $y);
    ?>
</body>
    </html>