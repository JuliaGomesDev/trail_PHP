<?php

function printMessage(string $message)
{
  echo $message . PHP_EOL;
}

function drawMoney(array $account, float $value) : array
{
  if ($value > $account['balance']) {
    printMessage('Você não pode sacar'); 
  } else {
    $account['balance'] -= $value;
  }

  return $account;
}

function depositMoney(array $account, float $value) : array 
{
  if ($value > 0) {
    $account['balance'] += $value;
  } else {
    printMessage('Depósitos não podem ser negativos');
  }

  return $account;
}

function nameUpperCase(array &$account) 
{ 
  $account['owner'] = mb_strtoupper($account['owner']);
}

?>
