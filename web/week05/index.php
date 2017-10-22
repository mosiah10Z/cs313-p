<?php
require "dbConnect.php";
$db = get_db();
include_once "header.php";
?>
    <section class="main-container">
    <div class="main-wrapper">
        <h2>Tennis Tech</h2>
        <?php
        if (isset($_SESSION['id'])) {
            echo "<p>Welcome, " . $_SESSION['first'] . " " . $_SESSION['last'] . "</p>";
        }
        ?>
        <p>Free tutorials available for beginners. Advanced content is available for authorized users.</p>
        <iframe width="420" height="345" src="https://www.youtube.com/watch?v=x-xGDdYdCA8&t=6s">
        </iframe>






    </div>
</section>


<?php

include_once 'footer.php';
?>
