<?php 
 if (isset($_GET['class'])) {
$class = $_GET['class'];
echo (($class == 'human')?"<img src='https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/a2a4e457-930d-44d2-b27c-686b9812225f/d53v8j8-6e8eb57a-b6dd-4c76-8b84-245275c6b854.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2EyYTRlNDU3LTkzMGQtNDRkMi1iMjdjLTY4NmI5ODEyMjI1ZlwvZDUzdjhqOC02ZThlYjU3YS1iNmRkLTRjNzYtOGI4NC0yNDUyNzVjNmI4NTQuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.Uaownfv_N9ewQQRPeGG_DffNLzm9m6uxY9HUp7pl_8U'/>"
    :(($class == 'cat')?"<img src='https://c.tenor.com/lTtlX5xlfmgAAAAC/nyan-cat.gif'/>"
    :"<img src='https://media1.giphy.com/media/Ze44chcCSUpyVN1gmQ/giphy.gif?cid=82a1493bwr3ankqt610r70e1bfdinvbb83fczswxk47ur092&rid=giphy.gif&ct=v'/>"));
 }
?>


<form method="get" action="">
Are you <input type="radio" value="human" name="class" checked>a Human
<input type="radio" value="cat" name="class">a Cat
or
<input type="radio" value="unicorn" name="class">a Unicorn ?
<br> 
<input type="submit" name="submit" value="Submit">