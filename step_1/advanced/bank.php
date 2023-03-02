<?php

require_once 'funtions.php';

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
$accounts['123.456.789-11'] = depositMoney($accounts['123.456.789-11'], 1500);

nameUpperCase($accounts['123.456.789-12']);

foreach ($accounts as $cpf => $account) {
  printMessage("$cpf - {$account['owner']} - {$account['balance']}");
}