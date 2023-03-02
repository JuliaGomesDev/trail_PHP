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
nameUpperCase($accounts['123.456.789-10']);

unset($accounts['123.456.789-11']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP e HTML</title>
</head>
<body>
  <h1>Contas correntes</h1>
  <?php foreach($accounts as $cpf => $account) { ?>
    <dl>
      <dt>
        <strong>Cliente: <?= $account['owner'] ?> </strong> 
      </dt>
      <dd>
        CPF: <?= $cpf ?>
      </dd>
      <dd>
        Saldo: <?= $account['balance'] ?>
      </dd>
    </dl>
  <?php } ?>  
</body>
</html>
