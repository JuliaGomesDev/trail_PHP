<?php

require_once 'autoload.php';

use Alura\Bank\Model\{Address, Cpf};
use Alura\Bank\Model\Account\{Owner, Account};

$address = new Address('Franca', 'Jardim Zelinda', 'Rua X', '251');
$owner1 = new Owner('Júlia', new Cpf('123.456.789-10'), $address);
$conta1 = new Account($owner1, 500);

$conta1->toWithdrawn(1000);
$conta1->toWithdrawn(200);
$conta1->toDeposit(-100);
$conta1->toDeposit(200);

$owner2 = new Owner('Fulano',new Cpf('123.456.789'), $address);
$conta2 = new Account($owner2, 0);

$conta1->transfer(800, $conta2);
$conta1->transfer(200, $conta2);

var_dump($conta1);
var_dump($conta2);

$name = $conta1->returnName();
$lastname = ' Nerd';
echo $name .= $lastname . PHP_EOL;

$cpf = $conta1->returnCPF();

echo $cpf ? $cpf . PHP_EOL : 'CPF não informado' . PHP_EOL;

echo Account::returnCount() . PHP_EOL;



?>