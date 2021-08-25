<?php
    if (isset($_GET['gender']) AND($_GET['name']) AND($_GET['age']) AND ctype_digit($_GET['age'])) {
        $gender = $_GET['gender'];
        $age = $_GET['age'];
        $name = $_GET['name'];
        echo (($age >= 21 AND $age <= 40 AND $gender == 'girl')? 'Hello ' .$name. ' welcome to the team!' : 'Sorry ' .$name. ' you do not fit the criteria');
    };
?>

<form method="get" action="">
Choose your gender: <input type="radio" value="boy" name="gender" checked>boy
<input type="radio" value="girl" name="gender">girl
<br>
    <label for="age">What is your age?: </label>
    <input type="text" id="age" name="age" value="" />
    <br>
    <label for="name">What is your name?: </label>
    <input type="text" id="name" name="name" value="" />
    <br>
    <input type="submit" name="submit" value="Greet me now">
</form>