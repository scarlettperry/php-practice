<!-- visibility defines where can access properties & methods of a class -->


<!-- public: high visibility. No restrictions, can be accessed inside or outside of class. This is the default value if no visibility is set. -->

<!-- protected: can be accessed inside the class declared it was declared or any class that extends that class -->

<!-- private: can only be accssed by the code inside the class (ie a function can call that property but can't call it outside of the class) -->

<!-- constant is a variable that can't be changed. doesnt start with $. practice is to make it uppercase -->

<?php

  class Pizza {
    //const value is the same for all objects of the class
    const SAUSAGE = "Sausage";
    const ONION = "Onion";
    public $sauce = "tomato";
    private $firstTopping = "cheese";
    public $secondTopping = "pineapple";
    public $thirdTopping = "";
    public $fourthTopping = "";

    public function displayPizza(){
      echo $this->firstTopping;
      echo $this->sauce; //$this refers to the current object
      echo self::SAUSAGE; //self refers to the class itsel
    }
  }

  $slice = new Pizza();
  $slice->sauce = "garlic"; //can access and change the property
  echo $slice->sauce;
  // echo $slice->firstTopping; will error out
  $slice->thirdTopping = Pizza::SAUSAGE;
  echo $slice->thirdTopping;
  $slice->displayPizza();
  echo Pizza::ONION;




?>
