<?php 
    if (isset($_COOKIE["keyword"]) && isset($_COOKIE["time"])){
        echo "Keyword : ".$_COOKIE["keyword"]."<br>";
        echo "Duration : ".$_COOKIE["time"]."<br>";
    }
    else {
        echo "Cookies are not accessible.";
    }
?>