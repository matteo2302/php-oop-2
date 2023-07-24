<?php
require __DIR__ . '/item.php';
class Animal extends Item{
  public $animal;
  public $function;

  public function __constuct($weight,$price,$image,$animal,$function){
    parent :: __constuct($weight,$price,$image);
    $this -> animal = $animal;
    $this -> function = $function;
}

}
?>