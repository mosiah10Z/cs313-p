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
            padding-top = 20px;
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
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$streetAddress = $_POST['streetaddress'];
$city = $_POST['city'];
$zipCode = $_POST['zipcode'];
$state = $_POST['state'];
$phone = $_POST['phone'];
$total = $_POST['totalNum'];

$item1 = $_POST['item1'];
$item2 = $_POST['item2'];
$item3 = $_POST['item3'];
$item4 = $_POST['item4'];
$item5 = $_POST['item5'];
$item6 = $_POST['item6'];
$expiryDate = $_POST['expDate'];
$submit = "";
$radio = "";

        
echo "<div>";
echo "<p>";
        
         echo "<span><b>Review Your Information..</b></span>";
        echo "<br>";
         echo "<br>";
echo $firstName . " " . $lastName . "<br>";
        echo "<br>";
        
echo $streetAddress . "<br>";
echo $city . "<br>";
echo $zipCode . "<br>";
echo $phone . "<br>";
        
        echo "<br>";
       




if (isset($_POST['submit'])) {
if(isset($_POST['cardType']))
{
echo "<span>You have selected :<b> ".$_POST['cardType']."</b></span>";
    
}
else{ echo "<span>Please choose any radio button.</span>";}
}

echo "<br>";
echo "Expiry Date is: " . $expiryDate;
echo "<br>";
echo "<br>";
        echo "<span><b>Shopping List</b></span>";
        echo "<br>";
        echo "<br>";
        
        $shoppingCart = array($item1, $item2, $item3, $item4, $item5, $item6);
        
        $var = 0;
        for ($i = 0; $i < 6; $i++){
            if ($shoppingCart[$i] != "")
            {
                if($i == 0)
                {
                    $var = $var + 40;
                    
                }
                else if($i == 1)
                   $var = $var + 40; 
                else if($i == 2)
                $var = $var + 50;
                else if($i == 3)
                $var = $var + 40;
                else if($i == 4)
                $var = $var + 55;
                else if($i == 5)
                $var = $var + 40;
            echo $shoppingCart[$i] . "<br>";
            }
        };
        
        echo "<br>";
        echo "<span><b>Total: </b>$</span>";
        echo $var;
        
        
        echo "</p>";
echo "</div>";
        
        echo "<form action='confirm.php' method='post'>
  
  <input type='submit' name='confirm' value='Confirm'>
  <input type='submit' name='cancel' value='Cancel'>
</form>";



?>
    </body>
</html>