<?php

    if (isset($_GET['age']) && ctype_digit($_GET['age'])) {
        $age = $_GET['age'];

        if($age >= 12 AND $age < 18) {
            echo 'Hello Teenager !';
        } else if($age >= 18 AND $age < 115) {
            echo 'Hello Adult !';
        } else if($age >= 115) {
            echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
        } else {
            echo 'Hello kiddo!';
        }
    }
?>

<form method="get" action="">
    <label for="age">Give me your age: </label>
    <input type="text" id="age" name="age" value="" />
    <input type="submit" name="submit" value="Greet me now">
</form>