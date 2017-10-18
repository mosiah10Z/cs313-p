<?php
if (isset($_POST['submit'])) {
    include_once 'dbConnect.php';
    
    $db = get_db();
    
    
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $dname = $_POST['dname'];
    $roleid = $_POST['roleid'];
    
    
    
    //hashing the pass
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

                    
                    
                    //insert to db
                    $sql = "insert into public.user (first_name, last_name, username, password, display_name, role_id) values(:first, :last, :uid, :hashedPwd, :dname, :roleid)";
                    $query = $db->prepare($sql);
                   
                   
                $query->bindParam(':first', $first);
                $query->bindParam(':last', $last);
                $query->bindParam(':uid', $uid);
                $query->bindParam(':hashedPwd', $hashedPwd);
                $query->bindParam(':dname', $dname);
                $query->bindParam(':roleid', $roleid);
                $query->execute();
    
                    
                    header("Location: signup.php?signup=success");
    
                    
    
}
