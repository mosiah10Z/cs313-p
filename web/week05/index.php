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





    </div>
</section>


<?php

include_once 'footer.php';
?>
