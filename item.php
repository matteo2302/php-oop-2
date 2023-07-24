<?php
class Item{
  public $name;
  public $weight;
  public $price;
  public $image;

  public function __construct($name,$weight,$price,$image,$animal){
   $this -> name = $name;
   $this -> weight = $weight;
   $this -> price = $price;
   $this -> image = $image;
   $this -> animal = $animal;
  }

}
?>