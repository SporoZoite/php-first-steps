<?php
    if (isset($_GET['gender']) AND($_GET['tongue']) AND($_GET['age']) AND ctype_digit($_GET['age'])) {
        $gender = $_GET['gender'];
        $age = $_GET['age'];
        $tongue = $_GET['tongue'];
    
        if ($tongue == 'yes') {
            $greet = 'Hello ';
        } else if ($tongue =='no'){
            $greet = 'Aloha ';
        };

        if ($gender == 'man') {
        $greeting = $greet.'Mister';
    } else if ($gender =='woman'){
        $greeting = $greet.'Miss';
    };

        if($age >= 12 AND $age < 18) {
            echo $greeting; 
            echo' Teenager !';
        } else if($age >= 18 AND $age < 115) {
            echo $greeting;
            echo ' Adult !';
        } else if($age >= 115) {
            echo $greeting;
            echo '! Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
        } else {
            echo $greeting; 
            echo ' kiddo!';
        }
    }
?>

<form method="get" action="">
Do you speak English?: <input type="radio" value="yes" name="tongue" checked>Yes
<input type="radio" value="no" name="tongue">No
<br>
Choose your gender: <input type="radio" value="man" name="gender" checked>man
<input type="radio" value="woman" name="gender">woman
<br>
    <label for="age">Give me your age: </label>
    <input type="text" id="age" name="age" value="" />
    <input type="submit" name="submit" value="Greet me now">
</form>