<?php
 if (isset($_GET['num1']) AND($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

function getSum($num1, $num2){
echo is_numeric($num1) ? "": "Error '$num1' is not an acceptable number<br>";
echo is_numeric($num2) ? "Sum of the two numbers $num1 and $num2 is :".($num1 + $num2): "Error '$num2' is not an acceptable number<br>";
}
getSum($num1, $num2);
 }
?>

<form method="get" action="">

    <label for="age">number 1: </label>
    <input type="text" id="number1" name="num1" value="" />
    <br>
    <label for="name">number 2: </label>
    <input type="text" id="number2" name="num2" value="" />
    <br>
    <input type="submit" name="submit" value="Add">
</form>