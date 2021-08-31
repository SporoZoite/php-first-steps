<?php
class Render {
//--------method----------------------
    public static function displayRecipe($recipe){
    $output = "";
    $output.=$recipe->getTitle() . " by " . $recipe->getSource();
    $output .="<br>";
    $output.= implode( ", ", $recipe->getTags());
    $output .="<br>";
    $output.= self::displayIngredients($recipe->getIngredients());
    return $output;  
} 
public static function displayIngredients($ingredients){
    $ing="";
    foreach ($ingredients as $ingredient) { 
     $ing.=$ingredient["amount"]." " .$ingredient["measure"]. " ".$ingredient["item"]. "<br>";
}
return $ing;
}

public static function listRecipes($titles){
    asort($titles);
    return implode(",<br>",$titles);
}

}



?>