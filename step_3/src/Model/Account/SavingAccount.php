<?php

namespace Alura\Bank\Model\Account;

use Alura\Bank\Model\Account\Account;

class SavingAccount extends Account {

  public function toWithdrawn(float $value)
  {
    $valuetoWithdrawn = $value + ($value * 0.05);

    if($this->balance < $valuetoWithdrawn){
      echo 'Valor não pode ser sacado' . PHP_EOL;
      return;
    }

    $this->balance -= $valuetoWithdrawn;
  }

  public static function returnCount() : int
  {
    return self::$count;
  }
}
?>