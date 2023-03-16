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
    } else {
      $this->balance -= $value;
    };
  }
  public function toDeposit(float $value) : void 
  {
    if($value < 0){
      echo 'Valor não pode ser depositado' . PHP_EOL;
    } else {
      $this->balance += $value;
    };
  }
};

# Testing functions

$conta = new Account();
var_dump($conta);
$conta->balance = 500;
var_dump($conta);
$conta->toWithdrawn(600);
$conta->toWithdrawn(100);
var_dump($conta);
$conta->toDeposit(-100);
$conta->toDeposit(200);
var_dump($conta);

$conta->ownerName = 'Júlia';
$lastname = ' Gomes';
$conta->ownerName .= $lastname;

var_dump($conta->ownerName) . PHP_EOL;

echo $conta->ownerCPF ?? 'CPF não informado' . PHP_EOL;

$conta->ownerCPF = '123.456.789-10';

echo $conta->ownerCPF ?? 'CPF não informado' . PHP_EOL;

?>



