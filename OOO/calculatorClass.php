<?php
//define class Calculator
    class Calculator {

    //is_numeric checks if parameter is int or string int
    //will be true if you pass in "1" or 1
    //but false if pass in "a"
    public function add($number1, $number2){
      if(is_numeric($number1) && is_numeric($number2)){
        return $number1+$number2;
      }else{
        echo "Both values should be numeric";
      }
    }

    public function subtract($number1, $number2){
      if(is_numeric($number1) && is_numeric($number2)){
        return $number1-$number2;
      }else{
        echo "Both values should be numeric";
      }
    }

    public function divide($number1, $number2){
      if(is_numeric($number1) && is_numeric($number2) && $number2 != 0){
        return $number1/$number2;
      }else{
        echo "Both values should be numeric and divisor shouldn't be zero.";
      }
    }

}

$ti84 = new Calculator();
// echo $ti84->add(1,2);
// $ti84->add("1", "a");
// echo $ti84->subtract(11, 2);
// echo $ti84->subtract(2,11);
// $ti84->subtract("a", 1);
$ti84->divide(2,0);
//echo $ti84->divide(10,5);
//$ti84->divide("a",3);
?>
