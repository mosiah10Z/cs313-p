<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <title>
    </title>
    <style type="text/css">
        header {
            font-size: 6em;
            color: white;
            text-align: center;
            font-weight: padding: 15px;
        }
        
        p {
            text-align: center;
            font-size: 2em;
        }
        
        form {
            text-align: center;
        }

    </style>
    <link rel="stylesheet" type="text/css" href="week07.css">
    <style type="text/css">


    </style>


    <script type="text/javascript" src="week07.js"></script>

</head>

<body>

    <header>Portrait Portal

    </header>









    <?php
    
   
    
    $ka = $_POST["Kendra"];
    $ks = $_POST["Sepia"];
    $m = $_POST["Milos"];
    $db = $_POST["Blonde"];
    $p = $_POST["Pensive"];
    $f = $_POST["Frown"];
    
    
     
     
     
     
     

    
    
   
        if (!is_null($ka)) {
             $_SESSION["Kendra"] = $ka; 
            
            }
    
    if (!is_null($ks)) {
             $_SESSION["Sepia"] = $ks;    
            }
   
    if (!is_null($m)) {
            $_SESSION["Milos"] = $m;    
            }
    
    if (!is_null($db)) {
            $_SESSION["Blonde"] = $db;    
            }
    
    if (!is_null($p)) {
            $_SESSION["Pensive"] = $p;    
            }
    
    if (!is_null($f)) {
             $_SESSION["Frown"] = $f;    
            }
//    echo "Session variables are set.";
//    print_r($_SESSION);
//    echo "<br>";
//     print_r($_POST);
    
    foreach ($_SESSION as $key => $value) {

        if ($value > 0) {
            echo "<form method='POST'" . "action=" . htmlspecialchars($_SERVER[" PHP_SELF "]) . ">";
            echo "<p>$key<br>" . "Quantity: " . "<input type='text' name='$key' value='$value'></p><br>";
            echo "<div style='text-align: center'>" . "<input id='submit' type='submit' value='Update Cart'><br>";
                
                echo "</div>";

    echo "</form>";
        }

    } 
    
    
    
    
    
    echo "<br>";
   


    echo "</p>";
    echo "</div>";

    echo "<form action='index.php' method='post'>

      <input type='submit' name='confirm' value='Browse Items'>
      
    </form>";
    
    echo "<form action='checkout.php' method='post'>

      <input type='submit' name='confirm' value='Check out'>
      
    </form>";


    ?>
</body>

</html>
