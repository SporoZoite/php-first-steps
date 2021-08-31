<?php
declare(strict_types=1);
class Recipe
{ 
    public $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tags = array();
    public $source = "The crazy cooker"  ;
}
$recipe1 = new Recipe();
echo $recipe1->source;
?>