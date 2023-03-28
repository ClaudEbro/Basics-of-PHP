<?php
    if (isset($_COOKIE["keyword"]) && isset($_COOKIE["time"])) {
        $keyword = $_COOKIE["keyword"];
        $time = $_COOKIE["time"];

        if ($time == "At leat one hour") {
            $chain = "https://news.google.com/?output=rss&q=".$keyword."%20when%3A1h&h1=fr&gl=FR&ceid=FR%3Afr";
        }
        else if ($time == "Today") {
            $chain = "https://news.google.com/?output=rss&q=".$keyword."%20when%3A1d&h1=fr&gl=FR&ceid=FR%3Afr";
        }
        else if ($time == "This week") {
            $chain = "https://news.google.com/?output=rss&q=".$keyword."%20when%3A7d&h1=fr&gl=FR&ceid=FR%3Afr";
        }

        $data = simplexml_load_file($chain);
        //var_dump($data);

        foreach ($data->channel->item as $item) {
            $title = $item->title;
            $link = $item->link;
            $date = strtotime($item->pubDate);
            $link = "<a href='".$link."'>".$title."</a>";
            
            $onelink["date"] = $date;
            $onelink["date"] = $link;

            
            $t[] = $onelink;
        }
        
        //Range in inverse chronologic order
        rsort($t);

        //Display last 10 news
        for($i = 0; $i<10; $i++) {
            echo $t[$i]["link"]."<br>";
            if ($i == 0) {
                //Put the last new in archive.html
                $file = fopen("archive.html", "a+") or die("Can not access this file <br>");
                fwrite($file, $t[$i]["link"]."<br>".chr(13)) or die("Can not write in the file <br>");
                fclose($file);
            }
        }
    }
?>