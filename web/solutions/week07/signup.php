<?php
require "dbconnect07.php";
$db = get_db();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Signup Page</title>
        <meta charset="utf-8">
    </head>

    <body>
        <form class="signup-form" action="handlesignup.php" method="POST">

            <input type="text" name="uid" placeholder="Username">


            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Sign up</button>

        </form>
    </body>

    </html>
