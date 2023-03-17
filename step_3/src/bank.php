<?php 

require_once 'Account.php';
require_once 'Owner.php';

$conta1 = new Account(new Owner('Júlia','123.456.789-10'), 500);

$conta1->toWithdrawn(1000);
$conta1->toWithdrawn(200);
$conta1->toDeposit(-100);
$conta1->toDeposit(200);

$conta2 = new Account(new Owner('Fulano',''), 0);

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