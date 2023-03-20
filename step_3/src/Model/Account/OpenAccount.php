<?php

namespace Alura\Bank\Model\Account;

use Alura\Bank\Model\Account\Account;

class OpenAccount extends Account {
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