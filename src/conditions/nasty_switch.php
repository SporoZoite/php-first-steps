
<?php

if (isset($_GET['score']) && ctype_digit($_GET['score'])) {
    $score = $_GET['score'];
    switch(true)
    {
    case ($score >=5 && $score <= 9):
        echo 'This is not sufficient. More studying is required.';
        break;
    case($score == 10):
        echo 'barely enough!';
        break;
    case ($score >= 11 && $score <=14):
         echo 'Not bad!';
         break;
    case ($score >= 15 && $score <=18): 
        echo 'Bravo, bravissimo!';
        break;
    case ($score >= 19 && $score <=20):
        echo 'Too good to be true : confront the cheater!';
        break;
    case ($score <5):   
   echo 'This work is really bad. What a dumb kid!';
        break;
    default:
   echo 'Wrong! Enter a number between 0 and 20';
    }
}
?>



<form method="get" action="">
<label for="score">Score (/20): </label>
<input type="text" id="score" name="score" value="" />
<input type="submit" name="submit" value="Comment">
</form>