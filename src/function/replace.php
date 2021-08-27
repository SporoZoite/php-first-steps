
<?php
$string = "The Infinite Improbability Drive";
$words = explode(' ', $string);
foreach ($words as $letter){  
    $words = str_replace('a','ae', $letter);
    $words = str_replace('e','ae', $letter);
    $replace = str_replace('ae', 'æ', $words); 
    echo ' '.$replace;     
    };
//foreach ($words as $letter){  
//    $back = str_replace('æ', 'ae', $words); 
//    echo '<br>';
//   echo ' '.$back;
//};

?>
