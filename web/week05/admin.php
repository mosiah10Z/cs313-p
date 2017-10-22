<?php
require "dbConnect.php";
$db = get_db();
include_once 'header.php';
?>
<section class="main-container">
    <div class="main-wrapper">
        <h2>Admin</h2>

        <?php
        $statement = $db->prepare("SELECT * FROM public.user");
        $statement->execute();
        // Go through each result



        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            // The variable "row" now holds the complete record for that
            // row, and we can access the different values based on their
            // name
            $id = $row["role_id"];
            $userprimary = $row["id"];


            echo '<strong>' . $row['first_name'] . ' ' . $row['last_name'] . '</strong><br>';

            echo '<br>';
            $statement2 = $db->prepare("SELECT name FROM role where id ='$id'");
            $statement2->execute();
            $row2 = $statement2->fetch(PDO::FETCH_ASSOC);
            echo 'Role: ' . $row2['name'];



            echo '<form action="updateRole.php" method="post">';
        echo '<input type="hidden" name="userprimary" value=' . $userprimary . '>';
        echo '<input type="radio" name="roleid" value=1>Super<br>
        <input type="radio" name="roleid" value=2>Advanced<br>
        <input type="radio" name="roleid" value=3>Beginner<br>
        <button type="submit" name="submit">Update</button>
        </form>';
            echo "<br><br>";


        }



        ?>



    </div>
</section>

<div>

</div>



