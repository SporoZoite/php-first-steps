<?php
    if (isset($_GET['gender']) AND($_GET['age']) AND ctype_digit($_GET['age'])) {
        $gender = $_GET['gender'];
        $age = $_GET['age'];
    
    if ($gender == 'man') {
        $greeting = 'Hello Mister';
    } else if ($gender =='woman'){
        $greeting = 'Hello Miss';
    };

        if($age >= 12 AND $age < 18) {
            echo $greeting.' Teenager !';
        } else if($age >= 18 AND $age < 115) {
            echo $greeting.' Adult !';
        } else if($age >= 115) {
            echo $greeting.'! Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
        } else {
            echo $greeting.' kiddo!';
        }
    }
?>

<form method="get" action="">
Choose your gender: <input type="radio" value="man" name="gender" checked>man
<input type="radio" value="woman" name="gender">woman
<br>
    <label for="age">Give me your age: </label>
    <input type="text" id="age" name="age" value="" />
    <input type="submit" name="submit" value="Greet me now">
</form>