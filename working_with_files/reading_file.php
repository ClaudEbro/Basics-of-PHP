<?php

//open the file in reading
$file = fopen("test.txt", "r") or die("Can not open this file <br>");

/*read the first line of the file with fgets
$line = fgets($file);

fclose($file);

display this line
echo $line;*/


/*read the more lines of the file with
while (!feof($file)) {
    $line = fgets($file);
    echo $line."<br>";
}
fclose($file);*/


/*reading the third chars char in the file
echo fgetc($file);
echo fgetc($file);
echo fgetc($file);
fclose($file);*/


//we can read all the file with fgetc
while (!feof($file)) {
    $c = fgetc($file);
    if (ord($c) == 13)
        echo "<br>";
    else
        echo $c;
}
fclose($file);

