<?php
$web_development = array ('frontend'=> [],'backend'=>[]);
$web_development['frontend'][] = 'xhtml';
$web_development['frontend'][] = 'CSS';
$web_development['frontend'][] = 'Javascript';
$web_development['backend'][] = 'Flash';
$web_development['backend'][] = 'Ruby';
$web_development['frontend'][0] = 'html';
array_splice ($web_development['backend'],0,1);


echo '<pre>';
print_r($web_development);
echo'</pre>';
?>