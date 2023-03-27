<?php

namespace Alura\Bank\Model\Account;

use Alura\Bank\Model\Person;

abstract class Account 
{

  protected float $balance;
  private Person $person;

  public function __construct(Person $person, float $balance) {
    $this->person = $person;
    $this->balance = $balance;
  }

  public function getBalance(): float
  {
    return $this->balance;
  }

  public function setBalance(float $balance): self
  {
    $this->balance = $balance;

    return $this;
  }

  public function getPerson(): Person 
  {
    return $this->person;
  }

  abstract public function toWithdrawn(float $value);

  public function toDeposit(float $value) : void 
  {
    if($value < 0){
      echo 'Valor não pode ser depositado' . PHP_EOL;
      return;
    }
    
    $this->balance += $value;
  }

  abstract public static function returnCount() : int;
};

?>



