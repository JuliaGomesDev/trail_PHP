<?php
class Account 
{
  private string $ownerCPF = '';
  private string $ownerName = '';
  private float $balance = 0;

  /**
   * Get the value of ownerCPF
   */
  public function getOwnerCPF(): string
  {
    return $this->ownerCPF;
  }

  /**
   * Set the value of ownerCPF
   */
  public function setOwnerCPF(string $ownerCPF): self
  {
    $this->ownerCPF = $ownerCPF;

    return $this;
  }

  /**
   * Get the value of ownerName
   */
  public function getOwnerName(): string
  {
    return $this->ownerName;
  }

  /**
   * Set the value of ownerName
   */
  public function setOwnerName(string $ownerName): self
  {
    $this->ownerName = $ownerName;

    return $this;
  }

  /**
   * Get the value of balance
   */
  public function getBalance(): float
  {
    return $this->balance;
  }

  /**
   * Set the value of balance
   */
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
};

?>



