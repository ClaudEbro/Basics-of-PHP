<?php
    $data = simplexml_load_file("data.xml");

    //var_dump($data);

    //Retrieve data from xml file
    foreach ($data->book as $book) {
        echo $book->title.", by ".$book->author."<br>";
    }
?> 