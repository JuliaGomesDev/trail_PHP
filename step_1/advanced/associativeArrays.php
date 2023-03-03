<?php

$account_01 = [
  'owner' => 'João',
  'balance' => 1000
];

$account_02 = [
  'owner' => 'Maria',
  'balance' => 2000
];

$account_03 = [
  'owner' => 'Leandro',
  'balance' => 5000
];

$accounts = [
  $account_01, 
  $account_02, 
  $account_03
];

for ($i = 0; $i < count($accounts); $i++) {
  echo $accounts[$i]['owner'] . PHP_EOL;
}
