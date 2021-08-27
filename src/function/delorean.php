<?php 
// Defining function
function whatIsToday(){
    $now = new DateTime("now", new DateTimeZone('Europe/Brussels'));
    $now->setTimezone(new DateTimeZone('Europe/Brussels')); 
    echo 'Today is '.$now->format('Y-m-d H:i:s'); 
  }
  // Calling function
  whatIsToday();
   
?>