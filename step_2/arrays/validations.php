<?php 

// array_key_exists = check if the key exists
// in_array = check if value exists
// isset =  check if the key exists and value isn't null
// array_search = check if a key exists as of value

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

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $grades, true));

echo 'Quem tirou  10?' . PHP_EOL;
var_dump(array_search(10, $grades, true));

?>