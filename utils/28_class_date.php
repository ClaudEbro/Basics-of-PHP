<?php

$date = new DateTime();

$dateInterval = new DateInterval('P10D'); //Add 10 days on the date today

$formattedDate = $date
    ->add($dateInterval)
    ->format('d-m')
;

echo($formattedDate);