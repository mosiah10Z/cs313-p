<?php
require "dbConnect.php";
$db = get_db();
include_once "header.php";
?>
    <div id="banner">
        <div>


        </div>

    </div>
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Free tutorials available for beginners.<br> Advanced content is available for authorized users.<br></h2>
            <?php
        if (isset($_SESSION['id'])) {
            echo "<p>Welcome, " . $_SESSION['first'] . " " . $_SESSION['last'] . "</p>";
        }
        ?>
                <p></p>


                <div align="center">
                    <iframe width="420" height="345" src="https://www.youtube.com/embed/x-xGDdYdCA8">
        </iframe>
                </div>






        </div>
    </section>


    <?php

include_once 'footer.php';
?>
