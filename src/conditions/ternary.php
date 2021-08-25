<?php 
 if (isset($_GET['gender'])) {
$gender = $_GET['gender'];
$hello = ($gender == 'F')?'Hello Miss':'Hello Mister';
echo $hello;
 }
?>


<form method="get" action="">
Choose your gender: <input type="radio" value="M" name="gender" checked>M
<input type="radio" value="F" name="gender">F
<br>
<input type="submit" name="submit" value="Greet me now">