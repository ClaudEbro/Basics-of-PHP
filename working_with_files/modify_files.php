<?php

/*open the file to add line
$file = fopen("test.txt", "a+") or die("Can not access this file <br>");
$text = chr(13)."New line";
fwrite($file, $text);
fclose($file);*/

//open the file to modify the content of file
$file = fopen("test.txt", "r+") or die("Can not access this file <br>");
fseek($file,14);
$text = "File modified at ".date("j/n/Y");
fwrite($file, $text) or die("Can not write in the file <br>");
fclose($file);