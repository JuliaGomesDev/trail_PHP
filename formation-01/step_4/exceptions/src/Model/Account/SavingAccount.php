<?php

namespace Alura\Bank\Model\Account;

use Alura\Bank\Model\Account\Account;
use Alura\Bank\Model\Person;

class SavingAccount extends Account {

  private static int $count = 0;
  public function __construct(Person $person, float $balance) 
  {
    parent::__construct($person, $balance);
    self::$count++;
  }
  public function toWithdrawn(float $value)
  {
    $valuetoWithdrawn = $value + ($value * 0.03);

    if($this->balance < $valuetoWithdrawn){
      throw new InsufficientBalanceException($valuetoWithdrawn, $this->balance);
    }

    $this->balance -= $valuetoWithdrawn;
  }

  public static function returnCount() : int
  {
    return self::$count;
  }
}
?>