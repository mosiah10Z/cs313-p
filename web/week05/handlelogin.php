<?php
include_once 'dbConnect.php';
    
    $db = get_db(); 
if (isset($_POST['submit'])) {
    
    
    
    $db = get_db(); $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    
    //error
    //see if it is empty
    
    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty ($pwd)) {
      header("Location: signup.php?signup=empty");
//            echo "first is empty";
            exit();
    
    }else {
       //check if input are valid
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
           header("Location: signup.php?signup=invalid");
//             echo "first and last";
                exit(); 
        }else {
            //check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               header("Location: signup.php?signup=invalidemail");
//                 echo "invalid email";
        exit();  
            }else {
                $sql = "SELECT * FROM public.user where username = '$uid'";
                $query = $db->prepare($sql);
                $query->execute();
                $fetch = $query->fetch();
                if ($fetch > 0) {
                    header("Location: signup.php?signup=invalidusername");
//                     echo "invalid user name";
                    exit();
                }else {
                    //hashing the pass
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //insert to db
                    $sql = "insert into public.users (first_name, last_name, username, password) values('$first', '$last', '$uid', '$hashedPwd');";
                    $query = $db->prepare($sql);
                    $query->execute();
                    
                    header("Location: signup.php?signup=success");
                    echo "i did it";
                    
                }
                
            }
        }
    }
    
    
    
}else {
    header("Location: signup.php");
    exit();
}
