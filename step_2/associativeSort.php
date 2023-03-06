<?php 

$fatec = [
  'ads' => 'Análise e Desenvolvimento de Sistemas',
  'gpi' => 'Gestão da Produção Industrial',
  'grh' => 'Gestão dos Recursos Humanos',
  'dsm' => 'Desenvovlimento de Softwares Multiplataforma',
];

asort($fatec);
var_dump($fatec);

arsort($fatec);
var_dump($fatec);

krsort($fatec);
var_dump($fatec);

ksort($fatec);
var_dump($fatec);

?>
