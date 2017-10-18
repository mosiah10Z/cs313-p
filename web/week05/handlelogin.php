<?php


echo "print!!!";
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

    //error
    //see if it is empty

    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty ($pwd) || empty ($dname) || empty ($roleid)) {
        
        echo "first is empty";
        exit();
//end of second if
    }else {
        //check if input are valid
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
            
            echo "first and last";
            exit();
        }else {
            //check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                
                echo "invalid email";
                exit();
            }else {
				
				

                $q = "SELECT COUNT(*) FROM public.user where username = :uid";
                $statement = $db->prepare($q);
                $statement->execute (
                    array(
                        ':uid' => $uid
                    )

                );

                $number_of_rows = $result->fetchColumn(); 
				
				echo "<p>" . $count; . "</p>";



                if (false) {
                    
                    echo "invalid user name";
                    exit();
                }else {
                    //hashing the pass
                    echo "hashing";
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

            }
        }
    }


//end of first if.
}else {
    header("Location: signup.php");
    exit();
}
