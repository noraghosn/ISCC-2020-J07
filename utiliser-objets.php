<?php

$date1= new DateTime('2020-07-02 15:47:00');
echo $date1 -> format ('<p> Y-m-d H:i:s</p>');

$date2= new DateTime ('2020-06-22 09:00:00');
echo $date2 -> format ('<p> Y-m-d H:i:s </p>');

$interval = $date2 -> diff ($date1);
echo $interval -> format ('%a Jours, %H Heures, %I Minutes depuis le début de la piscine.');
?>