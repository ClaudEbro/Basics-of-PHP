<?php
    //Concatenation with double quote

    $start = microtime();

    for ($i=0; $i<7000000; $i++) {
        $assign = "i : $i";
    }
    $end = microtime() - $start;


    //Concatenation with quote
    $start2 = microtime();
    for($i=0; $i<7000000; $i++){
        $assign2 = 'i : ' . $i;
    }
    $end2 = microtime() - $start2;


    //Concatenation with sprintf
    $start3 = microtime();
    for($i=0; $i<7000000; $i++){
        $assign3 = sprintf('i : %s', $i);
    }
    $end3 = microtime() - $start3;

    echo "<br>Time with double quote : $send";
    echo "<br>Time with quote : $send2";
    echo "<br>Time with sprintf : $send3"; 

