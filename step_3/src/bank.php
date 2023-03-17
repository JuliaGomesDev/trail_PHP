<?php 

require_once 'Account.php';
function validateCPF(Account $account) : bool|string
{
  if($account->getOwnerCPF() == '') {
    return false;
  }

  return $account->getOwnerCPF();
};

$conta1 = new Account();
var_dump($conta1);

$conta1->toDeposit(500);
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

$conta1->setOwnerName('Júlia');
$name = $conta1->getOwnerName();
$lastname = ' Gomes';
echo $name .= $lastname . PHP_EOL;

$cpf = validateCPF($conta1);

echo $cpf ? $cpf : 'CPF não informado' . PHP_EOL;

$conta1->setOwnerCPF('123.456.789-10');

$cpf = validateCPF($conta1);

echo $cpf ? $cpf : 'CPF não informado' . PHP_EOL;1

?>