<?php
$startup['firstnames'] = ['Audric','Corentin','Corentine','Thomas','Iris','Julien','Lisa','Ludo','Jérémy','Laurent'];
$amount_of_collegues = 1;
while ($amount_of_collegues<=count($startup['firstnames'])) {
    foreach ($startup as $firstnames){
        foreach ($firstnames as $firstname){
        echo '</br>My collegue number '.$amount_of_collegues++.' is '.$firstname;
    };
};
}; 

?>