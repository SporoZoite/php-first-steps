<?php
$volume = 5 * 5 * 3.14 * 2 * (1/3);
echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';
// Volume of a cone which ray is 3 and height is 4
$volume = 3 * 3 * 3.14 * 4 * (1/3);
echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume . ' cm<sup>3</sup><br />';
function cone_volume ($ray, $height){
$volume = $ray * $ray * 3.14 * $height * (1/3);
echo 'The volume of a cone which ray is '.$ray. ' and height is ' .$height. ' = ' . $volume . ' cm<sup>3</sup><br />';
}
cone_volume(7,9);
?>

