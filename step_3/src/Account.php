<?php
class Account 
{

  private float $balance;
  private static int $count = 0;

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

  public function toWithdrawn(float $value) : void
  {
    if($this->balance < $value){
      echo 'Valor não pode ser sacado' . PHP_EOL;
      return;
    }

    $this->balance -= $value;  
  }

  public function toDeposit(float $value) : void 
  {
    if($value < 0){
      echo 'Valor não pode ser depositado' . PHP_EOL;
      return;
    }
    
    $this->balance += $value;
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
    return Account::$count;
  }

  public function returnName() : string 
  {
    return $this->owner->name;
  }

  public function returnCPF() : string 
  {
    return $this->owner->getCPF();
  }
};

?>



