<?php

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

$accounts['123.456.789-13'] = [
  'owner' => 'Cláudia',
  'balance' => 6000
];

foreach ($accounts as $cpf => $account){
  echo $cpf . " - " . $account['owner'] . PHP_EOL;
}

?>