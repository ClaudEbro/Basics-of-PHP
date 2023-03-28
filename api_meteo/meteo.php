<?php
    $apiid = '73dbb746b1db7b6a4d8c08e324c8d002';
    $data = file_get_contents("https://api.openweathermap.org/data/2.5/weather?id=2293538&appid=$apiid");

    $meteo_abj = json_decode($data, true);

    // echo "<pre>"
    // var_dump($meteo_abj);
    // echo "</pre>"

    //Retrieve a data from api
    echo "Meto in Abidjan : ".$meteo_abj["weather"][0]["main"];
?>