<?php 

require_once 'Account.php';

$conta1 = new Account('123.456.789-10', 'Júlia Gomes', 500);
var_dump($conta1);

$conta1->toDeposit(500);
var_dump($conta1);

$conta1->toWithdrawn(2000);
$conta1->toWithdrawn(500);
var_dump($conta1);

$conta1->toDeposit(-100);
$conta1->toDeposit(200);
var_dump($conta1);

$conta2 = new Account('', 'Fulano', 0);

$conta1->transfer(800, $conta2);
$conta1->transfer(200, $conta2);
var_dump($conta1);
var_dump($conta2);

$name = $conta1->getOwnerName();
$lastname = ' Nerd';
echo $name .= $lastname . PHP_EOL;

$cpf = $conta1->getOwnerCPF();

echo $cpf ? $cpf : 'CPF não informado' . PHP_EOL;

?>