<?php
class Account 
{
  public string $ownerCPF;
  public string $ownerName;
  public float $balance = 0;
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

# Testing functions

$conta1 = new Account();
var_dump($conta1);

$conta1->balance = 500;
var_dump($conta1);

$conta1->toWithdrawn(600);
$conta1->toWithdrawn(100);
var_dump($conta1);

$conta1->toDeposit(-100);
$conta1->toDeposit(200);
var_dump($conta1);

$conta2 = new Account();

$conta1->transfer(800, $conta2);
$conta1->transfer(200, $conta2);
var_dump($conta1);
var_dump($conta2);

$conta1->ownerName = 'Júlia';
$lastname = ' Gomes';
echo $conta1->ownerName .= $lastname . PHP_EOL;

echo $conta1->ownerCPF ?? 'CPF não informado' . PHP_EOL;

$conta1->ownerCPF = '123.456.789-10';

echo $conta1->ownerCPF ?? 'CPF não informado' . PHP_EOL;

?>



