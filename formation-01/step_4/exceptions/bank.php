<?php

require_once 'autoload.php';

use Alura\Bank\Model\{Address, Cpf,};
use Alura\Bank\Model\Account\{InsufficientBalanceException, Owner, OpenAccount, SavingAccount};
use Alura\Bank\Model\Employee\Developer;

$address = new Address('Franca', 'Jardim Zelinda', 'Rua X', '251');
$owner1 = new Owner('Júlia', new Cpf('123.456.789-10'), $address);
$conta1 = new OpenAccount($owner1, 500);

try{
  $conta1->toWithdrawn(1000);
} catch(InsufficientBalanceException $exception) {
  echo "\nVocê não tem saldo para realizar este saque" . PHP_EOL;
  echo $exception->getMessage() . PHP_EOL;
}

$conta1->toWithdrawn(100);

try {
  $conta1->toDeposit(-100);  
} catch(InvalidArgumentException) {
  echo "\nVocê não pode sacar um valor negativo" . PHP_EOL;
}

$conta1->toDeposit(200);

$owner2 = new Owner('Fulano',new Cpf('123.456.789-10'), $address);
$conta2 = new SavingAccount($owner2, 0);

try {
  $conta1->transfer(800, $conta2);
} catch(InvalidArgumentException) {
  echo 'Valor não pode ser transferido' . PHP_EOL;
}

$conta1->transfer(200, $conta2);

var_dump($conta1);
var_dump($conta2);

$name = $conta1->getPerson()->getName();
$lastname = ' Nerd';
echo $name .= $lastname . PHP_EOL;

$emploee1 = new Developer(
  'João Gabriel', 
  new Cpf('123.469.789-00'), 
  2600);
$conta3 = new OpenAccount($emploee1, 300);

var_dump($conta3);

echo 'Contas correntes: ' . OpenAccount::returnCount() . PHP_EOL .
     'Contas poupanças: ' . SavingAccount::returnCount() . PHP_EOL;

?>