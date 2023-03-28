<?php 

    //Ensure that you receive data from configuration.php
    $keyword = $_POST['keyword'];
    $time = $_POST['time'];

    
    //Put parameters in cookies
    setcookie("keyword", $keyword, time() + 100 * 24 * 3600, "/");
    setcookie("time", $time, time() + 100 * 24 * 3600, "/");
    echo "Data well memorized !"
?>