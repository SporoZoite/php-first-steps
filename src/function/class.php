<?php
function feedback ($message,$class = "info") {
    echo "<div class='$class'>".ucfirst($class). ": ".$message."</div>";  
}
echo feedback("Incorrect email address", "error");
echo feedback("It's always a good time to smile");
?>