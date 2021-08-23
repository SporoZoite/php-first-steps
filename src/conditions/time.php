<?php 
$now = date("H"); 
if ($now >= 5 AND $now <= 9)
echo "Good morning!";
else if ($now > 9 AND $now <= 12)
echo "Good day!";
else if ($now > 12 AND $now <= 16)
echo "Good afternoon!";
else if ($now > 16 AND $now <= 21)
echo "Good evening!";
else 
echo "Good night..."; 
?>