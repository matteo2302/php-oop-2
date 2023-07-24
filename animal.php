<?php
require __DIR__ . '/item.php';
class Animal extends Item{
  public $animal;
  public $function;

  public function __construct($weight,$price,$image,$animal,$function){
    parent :: __construct($weight,$price,$image);
    $this -> animal = $animal;
    $this -> function = $function;
}

}
?>