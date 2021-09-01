<?php
class RecipeCollection
{
    private $title;
    private $recipes = array();
 
    public function addRecipe($recipes){
        $this->recipes[] = $recipes;
    }
    public function getRecipe(){
        return $this->recipes;
    }
    
    public function getRecipeTitles(){
        $titles = array();
        foreach ($this->recipes as $recipe){
            $titles[] = $recipe->getTitle();
        }
        return array_values($titles);
    }
    public function filterByTag($tag){
        $taggedRecipes = array();
        foreach ($this-> recipes as $recipe){
        if (in_array(strtolower($tag),$recipe->getTags())) {
    $taggedRecipes[] = $recipe;}
        }
        return $taggedRecipes;
    }

//--------------Shopping List --------------------//
  
public function getCombinedIngredients()
{
    $ingredients = array();
    foreach ($this->recipes as $recipe) {
        foreach ($recipe->getIngredients() as $i) {
            $item = $i['item'];
            $ingredients[$item][] = array($i["amount"],$i["measure"]);
        }
    }
    return $ingredients;
}
//--------------Meal plan----------------------//
public function filterById($id){
return $this->recipes[$id];
}
}
?>