<?php

class Dress {
  //properties and methods go here

  //visibility (public, private, protected) default is public
  public $color = "white";
  public $fabric = "silk";
  public $design = "loose";
}

        //camel case
class DressPattern{

}

//creating instances of an object

$dress1 = new Dress();
$dress1->color; //no $ before property name

$dress2 = new Dress();
$dress2 -> color = "Black";



?>
