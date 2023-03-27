<?php

namespace Alura\Bank\Model\Account;

use Alura\Bank\Model\Account\Account;
use Alura\Bank\Model\Person;

class OpenAccount extends Account {

  private static int $count = 0;
  public function __construct(Person $person, float $balance) 
  {
    parent::__construct($person, $balance);
    self::$count++;
  }
  
  public function toWithdrawn(float $value)
  {
    $valuetoWithdrawn = $value + ($value * 0.05);

    if($this->balance < $valuetoWithdrawn){
      echo 'Valor não pode ser sacado' . PHP_EOL;
      return;
    }

    $this->balance -= $valuetoWithdrawn;
  }

  public function transfer(float $valueToTransfer, Account $destinyAccount) : void
  {
    if($valueToTransfer > $this->balance) {
      echo 'Valor não pode ser transferido' . PHP_EOL;
      return;
    } 

    $this->toWithdrawn($valueToTransfer);
    $destinyAccount->toDeposit($valueToTransfer);
  }
  public static function returnCount() : int
  {
    return self::$count;
  }
}

?>