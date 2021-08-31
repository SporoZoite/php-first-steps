<?php
declare(strict_types=1);
class Recipe
{ 
    private $title;
    private $ingredients = array();
    private $instructions = array();
    private $yield;
    private $tags = array();
    private $source = "The crazy cooker"  ;
    //--------associative arrays ---------
    private $measurements = array (
    "liter",
    "g",
    "kg",
    "kg",
    "cup",
    "c. à soupe",
    "c. à café",
    "once"
);


//---------getters/setters------------
//setter
public function setTitle($title){
    $this->title = ucwords($title);
}

public function addInstruction($string){
    $this->instructions[]=$string;
}

public function addTag($tag){
    $this->tags[]= strtolower($tag);
}

public function setYield($yield){
    $this->yield = $yield;
}

public function setSource($source){
    $this->source = ucwords($source);
}




//getter
public function getTitle(){
    return $this->title;
}

public function getIngredients() {
    return $this->ingredients;
}

public function getInstructions() {
    return $this->instructions;
}

public function getTags() {
    return $this->tags;
}

public function getYield() {
    return $this->yield;
}
public function getSource() {
    return $this->source;
}

   


public function addIngredient($item, $amount = null, $measure = null){
    if($amount != null && !is_float($amount) && !is_int($amount)) {
        exit("The amount must be a float:".gettype($amount)."$amount given.");
    }
    if ($measure!= null && !in_array(strtolower($measure),$this->measurements)) {
        exit("please enter valid measurement: ".implode(",", $this->measurements));
    }
    $this->ingredients[] = array(
        "item"           => ucwords($item),
        "amount"         => $amount,
        "measure"        => $measure
    );
}

//-----Magic Method--------------
public function __construct($title){
    $this->setTitle($title);
}

//------Magic constants----------
public function __toString(){
    $output = "You are calling a " . __CLASS__."object with the title \"";
    //give name class
    $output.= $this->getTitle() . "\".";
    $output.="It is stored in" .basename(__FILE__). " at " . __DIR__ .".";
    // give path with file name/without file name
    $output.=" This display from line " . __LINE__ . "in method" . __METHOD__ . "<br>";
    // give current line number in file / name of the method used
    $output.="The following methods are available for object in this class: ";
    $output.=implode("<br/>", get_class_methods(__CLASS__));
    return $output;
}
  
  
};







?>