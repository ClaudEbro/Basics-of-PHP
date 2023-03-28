<?php
    //$data_json = '{"firstname":"Angel","lastname":"Gabriel","age":30,"admin":false,"inscription":1661899403}';

    //Transform json data in table
    //$table = json_decode($data_json, true);

    $file_name = "player.json";

    //Read file
    $file = fopen($file_name, "r+");

    //Retrieve data
    $data_json = fgets($file);

    //Close file
    fclose($file);    

    //Transform json data in table
    $table = json_decode($data_json, true);

    echo $table["lastname"]."<br>";
    echo $table["inscription"];
?>    