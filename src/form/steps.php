<html>
  <head><title>Hi!</title></head>
  <body>

<?php
if (isset($_POST['email'])){ 
    $email = $_POST['email'];
    $errors = array();
//sanitization
$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);

//validate
if (false === filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $errors['email']= "This email is invalid";
}

//execution
if (count($errors)>0){
    echo "There are mistakes";
    print_r($errors);
    exit;
}
// $bdd = new PDO ('mysql:host=localhost;dbname=test','root','');

//display response interface
}
?>



<form method="post" action="">

<label for="email">What is your email ?</label>
<input type="email" id="email" name="email" value="" />
<br>
<input type="submit" name="submit" value="Submit">
</form>
  </body>
</html>