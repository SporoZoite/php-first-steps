<?php
class RecipeCollection
{
    private $title;
    private $recipes = array();
    private $ingredients = array();

    public function setTitle($title){
        $this->title = ucwords($title);
    }
    public function getTitle(){
        return $this->title;
    }    
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
    public function addIngredients($ingredients){
        $this->ingredients[] = $ingredients;
    }

    public function getIngredients() {
        return $this->ingredients;
    }
    public function getCombineIngredients(){
        $ingredients = array();
        foreach ($this-> recipes as $recipe){
            $ingredients[] = $recipe->getIngredients();
        }
        return array_values($ingredients);
    }
}

?>