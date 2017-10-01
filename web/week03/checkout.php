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
    <div class="form">
        <form method="POST" action="confirm.php">

            First name:
            <br>
            <input type="text" name="firstname" value="" onInput="validateInput(this.value, 'name')">
            <span id="name" style='color:red; visibility: visible'>Input required</span>
            <br> Last name:
            <br>
            <input type="text" name="lastname" value="" onInput="validateInput(this.value, 'lastname')">
            <span id="lastname" style='color:red; visibility: visible'>Input required</span>

            <br> Street Address:
            <br>
            <input type="text" name="streetaddress" value="" onInput="validateInput(this.value, 'street')">
            <span id="street" style='color:red; visibility: visible'>Input required</span>
            <br> City:
            <br>
            <input type="text" name="city" value="" onInput="validateInput(this.value, 'city')">
            <span id="city" style='color:red; visibility: visible'>Input required</span>
            <br> Zip Code:
            <br>
            <input type="text" name="zipcode" value="" onInput="validateZip(this.value, 'zip')">
            <span id="zip" style='color:red; visibility: visible'>Input required</span>
            <br> State:
            <br>
            <input type="text" name="state" value="" onInput="validateState(this.value, 'state')">
            <span id="state" style='color:red; visibility: visible'>Invalid state abbreviation</span>
            <br> Phone number:
            <br>
            <input type="text" name="phone" value="" onInput="validatePhone(this.value, 'phonenumber')">
            <span id="phonenumber" style='color:red; visibility: visible'> For example: 2056623525</span>
            <br>
            <br>
            <input type="submit" name="submit" value="Complete Purchase">

        </form>


    </div>








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
    
    
    
    
    
    
    echo "<br>";
   


    echo "</p>";
    echo "</div>";

    echo "<form action='purchaseReview.php' method='post'>

      <input type='submit' name='confirm' value='View Cart'>
      
    </form>";


    ?>
</body>

</html>
