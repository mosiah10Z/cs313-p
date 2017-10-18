<?php
require "dbConnect.php";
$db = get_db();

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>
        </title>
    </head>

    <body>

        <h1>Scripture Resources <br></h1>



        <form method="POST" action="scripture3.php">
            Book:<br>
            <input type="text" name="book">
            <br>Chapter:<br>
            <input type="text" name="chapter">
            <br>Verse:<br>
            <input type="text" name="verse">
            <br>Content:<br>
            <textarea name="content" rows="3" cols="40"></textarea>
            <br><br>



            <?php
            foreach ($db->query('SELECT * FROM topic') as $row)
            {
                echo '<b><input type="checkbox" name="topic" value="' . $row['name'] 
                . '">'  . $row['name'] . '<br>';
            }
        ?>
                <input type="submit" value="Submit">


        </form>


    </body>


    </html>
