

<?php

    if (isset($_GET['score']) && ctype_digit($_GET['score'])) {
        $score = $_GET['score'];
        echo (($score >=5 && $score <= 9) ? 'This is not sufficient. More studying is required.'
        :(($score == 10) ? 'barely enough!'
        :(($score >= 11 && $score <=14) ? 'Not bad!'
        :(($score >= 15 && $score <=18) ? 'Bravo, bravissimo!'
        :(($score >= 19 && $score <=20) ? 'Too good to be true : confront the cheater!'
       :'This work is really bad. What a dumb kid!')))));
    }
?>



<form method="get" action="">
    <label for="score">Score (/20): </label>
    <input type="text" id="score" name="score" value="" />
    <input type="submit" name="submit" value="Comment">
</form>