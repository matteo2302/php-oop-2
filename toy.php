<?php

class Toy extends Item{
  public $animal;
  public $function;

  public function __construct($name,$weight,$price,$image,$animal,$function){
    parent :: __construct($weight,$price,$image,$animal);
    $this -> function = $function;
}

};

?>