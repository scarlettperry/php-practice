<!-- data encapsulation (how to manage change):
 - make all properties private
 - provide public methods to access and change the private properties -->

<?php

class Account {

  private $balance = 0;

  public function desposit($amount){
    echo "Previous balance was".$this->balance;
    $this->balance += $amount;
    echo "New balance is".$this->balance;
  }

  public function getBalance(){
    echo $this->balance;
  }

}

$checkings = new Account();
$checkings->desposit(100);
$checkings->getBalance();


?>
