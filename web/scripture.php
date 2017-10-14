<?php

//try
//{
//  $user = 'postgres';
//  $password = 'secret';
//  $db = new PDO('pgsql:host=127.0.0.1;dbname=Scriptures', $user, $password);
//}
//catch (PDOException $ex)
//{
//  echo 'Error!: ' . $ex->getMessage();
//  die();
//}


require "dbConnect.php";
$db = get_db();
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>
        </title>

        <body>

            <h1>Scripture Resources <br></h1>

            <?php foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures') as $row)
        {
            echo '<b>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse']. '</b>';
            echo ' - "' . $row['content'] . '"';            
            echo '<br/>';
        }
        
        ?>
        </body>
