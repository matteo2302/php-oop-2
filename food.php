<?php

class Food extends Item{
  public $type;
  

  public function __construct($name,$weight,$price,$image,$animal,$type){
    parent :: __construct($weight,$price,$image,$animal);
    $this -> type = $type;
}

};

?>