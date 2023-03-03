<?php 

$grades = [
  'Antonio' => 10,
  'Marcela' => 9,
  'Carlos' => 4,
  'Dimitris' => 3,
  'Cristiano' => null
];

echo 'O aluno Cristiano fez a prova:' . PHP_EOL;
var_dump(array_key_exists('Cristiano', $grades));

echo 'Você tem certeza' . PHP_EOL;

if (isset($grades['Cristiano']) == null) {
  echo 'Eita, me equivoquei'. PHP_EOL;
} else{
  echo 'Sim! Confia!' . PHP_EOL;
};

?>