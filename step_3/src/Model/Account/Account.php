<?php

namespace Alura\Bank\Model\Account;
abstract class Account 
{

  protected float $balance;
  protected static int $count = 0;

  private Owner $owner;

  public function __construct(Owner $owner, float $balance) {

    $this->owner = $owner;
    $this->balance = $balance;
    
    self::$count++;
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

  public function returnName() : string 
  {
    return $this->owner->getName();
  }

  public function returnCPF() : string 
  {
    return $this->owner->returnCPF();
  }
};

?>



