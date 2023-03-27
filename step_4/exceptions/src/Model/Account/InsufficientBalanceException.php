<?php

namespace Alura\Bank\Model\Account;

class InsufficientBalanceException extends \DomainException {

  public function __construct(float $valuetoWithdrawn, float $balance) {

    $message = "Você tentou sacar {$valuetoWithdrawn}. Mas possui apenas {$balance} de saldo" . PHP_EOL;
    parent::__construct($message);
  }
}


?>InvalidArgumentExcept