<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <nav>
            <div class="main-wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <ul>
                        <li><a href="tutorial.php">Tutorial</a></li>
                    </ul>
                    <ul>
                        <li><a href="advanced.php">Advanced</a></li>
                    </ul>
                </ul>
                <div class="nav-login">
                    <?php

                    if (isset($_SESSION['id'])) {
                        echo '<form action="handlelogout.php" method="post">
                                            <button type="submit" name="submit">Logout</button>
                                        </form>';
                        //Print_r ($_SESSION);
                    }else {
                        echo ' <form action="handlelogout.php" method="post">
                        <button type="submit" name="submit">Logout</button>
                    </form>
                    <form action="handlelogin.php" method="post">
                        <input type="text" name="uid" placeholder="Username/email">
                        <input type="password" name="pwd" placeholder="password">
                        <button type="submit" name="submit">Login</button>
                    </form>
                    <a href="signup.php">Sign Up</a>';
                        //Print_r ($_SESSION);
                    }

                    ?>



                </div>

            </div>

        </nav>
    </header>
