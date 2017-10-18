<?php

echo "data inserted";

    include_once 'dbConnect.php';
    
    $db = get_db();
    
    
    $book = $_POST['book'];
    $chapter = $_POST['chapter'];
    $verse = $_POST['verse'];
    $content = $_POST['content'];
    $topic = $_POST['topic'];
   
    
    echo "data inserted";
    
    //hashing the pass
   

                    
                    
                    //insert to db
                    $sql = "insert into public.scriptures (book, chapter, verse, content) values(:book, :chapter, :verse, :content)";
                    $query = $db->prepare($sql);
                  echo "data inserted"; 
                   
                $query->bindParam(':book', $book);
                $query->bindParam(':chapter', $chapter);
                $query->bindParam(':verse', $verse);
                $query->bindParam(':content', $content);
                
                $query->execute();
    
                    
                   echo "data inserted";
