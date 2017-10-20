<?php
session_start();
if (isset($_POST['submit'])) {
    include "dbConnect.php";
    $db = get_db();

    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

        //error handlers

    if (empty($uid) || empty($pwd)) {
        header("Location: index.php?login=error");

        exit();
    }else {
        $sql = "select * from public.user where username = :$uid";
        $statement = $db->prepare($sql);
        $statement->execute (
            array(
                ':uid' => $uid
            )

        );

        $count = (int)$statement->rowCount();
        if ($count < 1) {
            header("Location: index.php?login=error");

            exit();
        }else {
            if($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                //dehashing
                $hashedPwdCheck = password_verify($pwd, $row['password']);
                if ($hashedPwdCheck == false) {
                    header("Location: index.php?login=error");
                    exit();
                }elseif ($hashedPwdCheck == true) {
                    //login the user
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['first'] = $row['first_name'];
                    $_SESSION['last'] = $row['last_name'];

                    $_SESSION['uid'] = $row['username'];
                    header("Location: index.php?login=success");
                    exit();
                }
            }
        }


    }


}else {
    header("Location: index.php?login=error");
    exit();

}
