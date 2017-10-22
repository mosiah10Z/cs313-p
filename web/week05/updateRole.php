<?php

require "dbConnect.php";
$db = get_db();

if (isset($_POST['submit'])) {

    $roleid = $_POST['roleid'];
    $userprimary = $_POST['userprimary'];

    $sql = "update public.user set role_id = :roleid where id = :userprimary)";
    $query = $db->prepare($sql);



    $query->bindParam(':userprimary', $userprimary, PDO::PARAM_INT);
    $query->bindParam(':roleid', $roleid, PDO::PARAM_INT);
    $query->execute();


    header("Location: admin.php?update=success");
    exit();

}



