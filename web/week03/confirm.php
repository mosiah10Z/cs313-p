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
            padding-top=20px;
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
        
         $firstname = $lastname = $streetaddress = $city = $zipcode = $state = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $streetaddress = test_input($_POST["streetaddress"]);
  $city = test_input($_POST["city"]);
  $zipcode = test_input($_POST["zipcode"]);
  $state = test_input($_POST["state"]);
  $phone = test_input($_POST["phone"]);  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
        
echo "<p>";        
if (isset($_POST['confirm'])) 
{
echo "Your order has been confirmed.";
}
else if (isset($_POST['cancel']))
{
   echo "Your order has been cancelled."; 
}
    echo "</p>";
    
    
    $firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$streetAddress = $_POST['streetaddress'];
$city = $_POST['city'];
$zipCode = $_POST['zipcode'];
$state = $_POST['state'];
$phone = $_POST['phone'];
    
    echo "<div>";
echo "<p>";
        
         echo "<span><b>Shipping to..</b></span>";
        echo "<br>";
         echo "<br>";
echo $firstName . " " . $lastName . "<br>";
        echo "<br>";
        
echo $streetAddress . "<br>";
echo $city . "<br>";
echo $zipCode . "<br>";
echo $phone . "<br>";
        
        echo "<br>";
    
    echo "<span><b>Order list</b></span>";
        echo "<br>";

    foreach ($_SESSION as $key => $value) { if ($value > 0) { echo "
    $key<br>" . "Quantity: " . "$value<br>"; } }
    
    
    
    
    
    
    echo "</p>";
echo "</div>";



?>
</body>

</html>
