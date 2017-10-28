<?php
session_start();
if (isset($_POST['submit'])) {
    include_once 'dbConnect07.php';

   $db = get_db();




   $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    
                   echo "hashing";
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);




                   //insert to db
                    $sql = "insert into public.users (username, password) values(:uid, :hashedPwd)";
                    $query = $db->prepare($sql);
    echo "hashing";


                 
                    $query->bindParam(':uid', $uid);
                    $query->bindParam(':hashedPwd', $hashedPwd);
                    
                   $query->execute();


                   header("Location: signup.php?signup=success");
    echo "hashing";
                    exit();
               


//end of first if.
}else {
    header("Location: signup.php");
    exit();
}
