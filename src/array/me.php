<?php
$me = array (
    'name' => 'Lisa',
    'last_name' => 'van Hooydonk',
    'age' => '32',
    'favourite_holliday' => 'Halloween',
    'like_soccer' => 'false'
);
echo '<pre>';
print_r($me);
echo'</pre>';
$me['hobbies'] = ['video-making','roleplaying','8-bit music','cinema','festivals'] ;
echo '<pre>';
print_r($me);
echo'</pre>';
$other_me = array (
    'name' => 'Asil',
    'age' => '23',
    'favourite_holliday' => 'Easter',
    'like_soccer' => 'true'
);
$other_me['hobbies'] = ['make-up','selfies','rap-music','video-games','clubin'] ;
$me ['other_me'] = $other_me;
echo '<pre>';
print_r($me);
echo'</pre>';
echo 'She has '.count($other_me['hobbies']).' hobbies';
echo '<br>';
echo 'I have '.count($me['hobbies']).' hobbies';
echo '<br>';
echo 'We have '.((count($other_me['hobbies'])) + (count($me['hobbies']))).' hobbies';
$me['hobbies'][] = 'taxidermy';
echo '<pre>';
print_r($me);
echo'</pre>';
?>
