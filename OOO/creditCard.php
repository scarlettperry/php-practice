<?php

class CreditCard {

  const CARDNUMBER = "1111222233334444";
  private $totalBalance = 1000;
  private $pinNumber = "1234";

  public function getCardNumber(){
    return self::CARDNUMBER;
  }

  public function getTotalBalance(){
    return $this->totalBalance;
  }

  private function setTotalBalance($balance){
    return $this->totalBalance = $balance;
  }

  public function setPin($newPin){
    if(preg_match("/^[1-9]\d{3}$/", $newPin)){
      return $this->pinNumber = $newPin;
    }else{
      echo "Pin number should be a string of 4 digits and first digit should not be zero";
    }
  }

  public function getPin(){
    return $this->pinNumber;
  }

  public function shopping($cardNumber, $pinNumber, $spendingMoney){
    if($cardNumber === $this->getCardNumber() && $pinNumber === $this->getPin()){
      if($spendingMoney <= $this->getTotalBalance()){
        $remBalance = $this->totalBalance - $spendingMoney;
        $this->setTotalBalance($remBalance);
        echo "Your remaining balance is ".$remBalance;
      }else{
        echo "You don't have enough money in your account";
      }
    }else{
      echo "Your card number or pin is invalid";
    }

  }

}//end of class

$christmasShopping = new CreditCard();
$christmasShopping->setPin("5678");
// echo $christmasShopping->getPin();
$christmasShopping->shopping("1111222233334444", "5678", 20);










?>
