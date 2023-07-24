<?php
class Item{
  public $weight;
  public $price;
  public $image;

  public function __constuct($weight,$price,$image){
   $this -> weight = $weight;
   $this -> price = $price;
   $this -> image = $image;
  }

}
?>