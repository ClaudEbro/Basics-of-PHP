<?php
    $player["firstname"] = "Angel";
    $player["lastname"] = "Gabriel";
    $player["age"] = 30;
    $player["admin"] = false;
    $player["inscription"] = time();

    $data_json = json_encode($player);

    echo $data_json;

    //Create and open a json file with fopen().
    $file_name = "player.json";
    $file = fopen($file_name, "w+");

    //Write in the file with fwrite().
    fwrite($file, $data_json);

    //Close the file with fclose().
    fclose($file);
?>