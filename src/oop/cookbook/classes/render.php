<?php
class Render {

//--------method----------------------
    public static function displayRecipe($recipe){
    $output = "";
    $output.=$recipe->getTitle() . " by " . $recipe->getSource();
    $output .="<br>";
    $output.= implode( ", ", $recipe->getTags());
    $output .= "<br>";
    $output .= $recipe->getYield();
    $output .= "<br><br>";
    $output.= self::displayIngredients($recipe->getIngredients());
    $output .= "<br>";
    $output .= implode("<br>", $recipe->getInstructions());
    $output .= "<br><br>";
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
    $output="";
    foreach ($titles as $key => $title){
        if ($output !=""){
            $output.="<br>";
        }
        $output.= "[$key] $title";
    }
    return $output;
}

//--------------Shopping List --------------------//
public static function listIngredients($ingredients_list){
    ksort($ingredients_list);
    return implode(",<br>",array_keys($ingredients_list));
    }  
}
    //implode() function returns a string from the elements of an array.



?>