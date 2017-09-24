<!DOCTYPE html>
<html>

<body>
    <?php
$spanish = array("uno", "dos", "tres","cuatro", "cinco", "seis", "siete", "ocho", "nueve", "diez", "once", "doce", "trece", "catorce", "quince", "dieciseis", "diecisiete", "dieciocho", "diecinueve", "veinte");
$english = array("one", "two", "three", "four", 
"five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve" ,"thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", 
"nineteen", "twenty");
    $count = 0;
//bool in_array ( mixed $needle , array $haystack [, bool $strict = FALSE ] );
for ($i = 0; $i < 20; $i++) {
    $count++;
if ($_POST["input4"] == $english[$i]){
    
echo "The word \"". $english[$i] . "\" in Spanish is \"" . $spanish[$i] . "\"";
   
}
else if (!(in_array($_POST["input4"], $spanish, true))){
    echo 'The English cardinal "' . $_POST["input4"] . '" is not between "one" and "twenty"';
    
}
   
}
    // echo "$count";
?>
</body>

</html>