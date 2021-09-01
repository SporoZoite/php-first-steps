<?php

include "classes/recipes.php";
include "classes/render.php";
include "classes/recipecollection.php";
include "cookbook.php";
echo Render::displayRecipe($belgian_waffles);


$cookbook = new RecipeCollection("Becode recipe");
$cookbook->addRecipe($lemon_chicken);
$cookbook->addRecipe($granola_muffins);
$cookbook->addRecipe($belgian_waffles);
$cookbook->addRecipe($pepper_casserole);
$cookbook->addRecipe($lasagna);
$cookbook->addRecipe($dried_mushroom_ragout);
//var_dump($cookbook);

echo Render::listRecipes($cookbook->getRecipeTitles());

//--------------Shopping List --------------------//
echo "<br><br> Shopping list: <br>". Render::listIngredients($cookbook->getCombinedIngredients());
echo "<br><br>";
echo Render::displayRecipe($cookbook->filterById(3));
$week1 = new RecipeCollection ("Meal Plan: week 1");
$week1 ->addRecipe($cookbook->filterById(0));
$week1 ->addRecipe($cookbook->filterById(3));
$week1 ->addRecipe($cookbook->filterById(4));
$week1 ->addRecipe($cookbook->filterById(5));
echo Render::listRecipes($week1->getRecipeTitles());
echo "<br><br> Shopping list: <br>". Render::listIngredients($week1->getCombinedIngredients());
?>