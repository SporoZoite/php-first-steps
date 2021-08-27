

<?php
$string = "The Infinite Improbability Drive";
$acronym = implode('',array_diff_assoc(str_split(ucwords($string)),str_split(strtolower($string))));

echo $acronym;
?>