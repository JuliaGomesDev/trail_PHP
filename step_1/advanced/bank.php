<?php

function printMessage($message) 
{
  echo $message . PHP_EOL;
}

function drawMoney($account, $value)
{
  if ($value > $account['balance']) {
    printMessage('Você não pode sacar'); 
  } else {
    $account['balance'] -= $value;
  }

  return $account;
}

$accounts = [
  '123.456.789-10' => [
    'owner' => 'João',
    'balance' => 1000
  ],
  '123.456.789-11' => [
    'owner' => 'Maria',
    'balance' => 2000
  ],  
  '123.456.789-12' => [
    'owner' => 'Leandro',
    'balance' => 5000
  ]
];

$accounts['123.456.789-11'] = drawMoney($accounts['123.456.789-11'], 500);

foreach ($accounts as $cpf => $account) {
  printMessage($cpf . " - " . $account['owner'] . ' - ' . $account['balance']);
}