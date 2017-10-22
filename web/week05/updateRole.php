<?php

require "dbConnect.php";
$db = get_db();

if (!isset($_SESSION['uid'])){
    header("Location: index.php");

}

if (isset($_POST['submit'])) {

    $roleid = $_POST['roleid'];
    $userprimary = $_POST['userprimary'];

    $sql = "update public.user set role_id = :roleid where id = :userprimary";
    $query = $db->prepare($sql);



    $query->bindParam(':userprimary', $userprimary);
    $query->bindParam(':roleid', $roleid);
    $query->execute();


    header("Location: admin.php?update=success");
    exit();

}



