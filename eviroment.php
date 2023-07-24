<?php

class Enviroment extends Item{
  public $height;
  public $widht;

  public function __construct($name,$weight,$price,$image,$animal,$height,$widht){
    parent :: __construct($weight,$price,$image,$animal);
    $this -> height = $height;
    $this -> widht = $widht;
}

};

?>