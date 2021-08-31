<?php
echo "<pre>";
print_r($_GET);
?>

<form method="get" action="">

    <label for="name">What is your name? </label>
    <input type="text" id="name" name="name" value="" />
    <br>
    <label for="age">How old are you? </label>
    <input type="number" id="age" name="age" value="" />
    <br>
    Do you prefer:
    <input type="radio" id="warhol" name="warhol" value="Andy Warhol"><label for="warhol">Andy Warhol</label>
    <input type="radio" id="basquiat" name="basquiat" value="Basquiat"><label for="basquiat">Basquiat</label>
    <br>
    <label for="life">Tell me about your life </label>
    <br>
    <textarea id="life" name="life" rows="4" cols="50"></textarea>
    <br>


    <input type="submit" name="submit" value="Submit">
</form>

