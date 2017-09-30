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

    </style>
    <link rel="stylesheet" type="text/css" href="week07.css">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" src="week07.js"></script>

</head>

<body>
    <header>Portrait Portal

    </header>
    <nav>
        <ul>


            <li><a href="../index.html">CS 313 Assignments</a></li>

        </ul>
    </nav>
    <p class="definition">
        "Original Portraits by Mosiah"
    </p>



    <form method="POST" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">
        <div class="images">
            <div id="im" class="col-1-3">
                <img src="20160614_180112.jpg" />
                <label for="kendraazul">Kendra Azul</label>
                <input type='checkbox' name="kendraazul" id="order-ka" value=1>
            </div>
            <div id="im" class="col-1-3">
                <img src="20160621_225756.jpg" />
                <label for="kendrasepia">Kendra Sepia</label>
                <input type='checkbox' name="kendrasepia" id="order-ks" value=1>

            </div>
            <div id="im" class="col-1-3">
                <img src="20160616_225315.jpg" />
                <label for="frown">Frown</label>
                <input type='checkbox' name="frown" id="order-f" value=1>

            </div>

            <div id="im" class="col-1-3">
                <img src="20160614_210809.jpg" />
                <label for="dutchblonde">Dutch Blonde</label>
                <input type='checkbox' name="dutchblonde" id="order-db" value=1>

            </div>
            <div id="im" class="col-1-3">
                <img src="20160703_022026.jpg" />
                <label for="pensive">Pensive</label>
                <input type="checkbox" name="pensive" id="order-p" value=1>

            </div>
            <div id="im" class="col-1-3">
                <img src="20160623_215418.jpg" />
                <label for="milos">Milos</label>
                <input type="checkbox" name="milos" id="order-m" value=1>


            </div>


        </div>
        <div style="text-align: center"><input id="submit" type="submit" value="Submit Answers"></div>

    </form>

    <?php
    $ka = $_POST["kendraazul"];
    $ks = $_POST["kendrasepia"];
    $m = $_POST["milos"];
    $db = $_POST["dutchblonde"];
    $p = $_POST["pensive"];
    $f = $_POST["frown"];
    
    $_SESSION["ka"] += $ka;
     $_SESSION["ks"] += $ks;
     $_SESSION["m"] += $m;
     $_SESSION["db"] += $db;
     $_SESSION["p"] += $p;
     $_SESSION["f"] += $f;
    
    
  
    

echo "Session variables are set.";
    print_r($_SESSION);
    echo "<br>";
     print_r($_POST);
    
    ?>



</body>


</html>
