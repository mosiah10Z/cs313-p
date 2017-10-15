<?php
require "dbConnect.php";
$db = get_db();
include_once 'header.php';
?>
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Beginner</h2>
            <p>This contains tutorials for beginners</p>

            <?php
            $statement = $db->prepare("SELECT *
  FROM tutorial AS t1
  JOIN public.user AS t2
  ON t1.user_id = t2.id");
$statement->execute();
// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	echo '<p>';
	
	echo '<strong>' . $row['title'] . '</strong> by ' . $row['first_name'] . '<br>';
    
    echo '<br>' . $row['tutorial_text'];
	echo '</p>';
}
?>



        </div>
    </section>


    <?php

include_once 'footer.php';
?>