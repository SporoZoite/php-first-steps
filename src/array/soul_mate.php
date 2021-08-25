<?php

$me = array (
    'name' => 'Lisa',
    'last_name' => 'van Hooydonk',
    'age' => '32',
    'favourite_holliday' => 'Halloween',
    'hobbies' => array ('film-making','cinema','music', 'diy'),
);
$soulmate = array (
    'name' => 'Paul',
    'last_name' => 'Bourrieres',
    'age' => '31',
    'favourite_holliday' => 'Wedding-anniversary',
    'hobbies' => array ('film-making','cinema','drawing', 'video-games'),
);

$possible_hobbies_via_intersection = array_intersect($me['hobbies'],$soulmate['hobbies']);
$possible_hobbies_via_merge = array_unique(array_merge($me['hobbies'],$soulmate['hobbies']),SORT_REGULAR);
echo '<pre>';
print_r($me);
print_r($soulmate);
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo'</pre>';

?>