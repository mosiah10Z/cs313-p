<?php
if (isset($_POST['submit'])) {
    session_start();
    unset($_SESSION);
    session_destroy();
    header("Location: index.php");
    exit();
}