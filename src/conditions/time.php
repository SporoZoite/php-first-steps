<?php 
$date = new DateTime("now", new DateTimeZone('Europe/Brussels'));
echo $date->format('H:i:s');

$now = $date -> format('H'); 
if ($now >= 5 AND $now <= 9)
echo "</br>Good morning!";
else if ($now > 9 AND $now <= 12)
echo "</br>Good day!";
else if ($now > 12 AND $now <= 16)
echo "</br>Good afternoon!";
else if ($now > 16 AND $now <= 21)
echo "</br>Good evening!";
else 
echo "</br>Good night..."; 

?>