<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
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


                    <?php
                    if ($_SESSION['roleid'] == 2 || $_SESSION['roleid'] == 1 ) {
                        
                        echo '<li><a href="advanced.php">Advanced</a></li>';
                    }
                    if ($_SESSION['roleid'] == 1) {
                        echo '<li><a href="admin.php">Admin</a></li>';
                        
                    }
                    ?>

                </ul>
                <div class="nav-login">
                    <?php

                    if (isset($_SESSION['id'])) {


                        echo '<form action="handlelogout.php" method="post">
                                            <button type="submit" name="submit">Logout</button>
                                        </form>';
//                        Print_r ($_SESSION);
                    }else {
                        echo '<form action="handlelogin.php" method="post">
                        <input type="text" name="uid" placeholder="Username">
                        <input type="password" name="pwd" placeholder="password">
                        <button type="submit" name="submit">Login</button>
                    </form>
                    <a href="signup.php">Sign Up</a>';
//                        Print_r ($_SESSION);
                    }

                    ?>



                </div>

            </div>

        </nav>
    </header>
