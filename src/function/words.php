<?php
$str="One of the extraordinary things about life is the sort of places it's prepared to put up with living . Anywhere it can get some kind of a grip whether it's the intoxicating seas of Santraginus V, where the fish never seem to care whatever the heck kind of direction they swim in, the fire storms of Frastra where they say life begins at fourty thousands degrees or just burrowing around in the lower intestine of a rat for the sheer unadulterated hell of it, life will always find a way of hanging on in somewhere .";
$str = explode(' ', $str);
foreach ($str as $pos => $word) {
 $tmpArray = array();
 if (strlen($word) > 3) { 
     // not possible to mix up the order of letters in a word less than four characters long
  $characters = preg_split('//', $word, -1, PREG_SPLIT_NO_EMPTY);
  for ($i = 1 ; $i < count($characters)-1 ; ++$i) {
   $tmpArray[] = $characters[$i];
   shuffle($tmpArray);
  }
  $str[$pos] = $characters[0] . implode($tmpArray) . $characters[count($characters)-1] . ' ';
 }
}
echo implode(' ', $str);
?>

