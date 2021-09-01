<?php

include "classes/recipes.php";
include "classes/render.php";
include "classes/recipecollection.php";
include "cookbook.php";
echo Render::displayRecipe($belgian_waffles);


$cookbook = new RecipeCollection("Becode recipe");
$cookbook->addRecipe($lemon_chicken);
//var_dump($cookbook);
echo Render::listRecipes($cookbook->getRecipeTitles());

//--------------Shopping List --------------------//
echo Render::listIngredients($cookbook->getCombineIngredients());

?>