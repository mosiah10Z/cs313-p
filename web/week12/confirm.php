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




?>
        </body>
</html>