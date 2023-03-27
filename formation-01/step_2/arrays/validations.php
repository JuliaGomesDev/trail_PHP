<?php 

// array_key_exists = check if the key exists
// in_array = check if value exists
// isset =  check if the key exists and value isn't null
// array_search = check if a key exists as of value

$grades = [
  'Júlia' => 0,
  'Antonio' => 10,
  'Marcela' => 9,
  'Carlos' => 4,
  'Dimitris' => 3,
  'Cristiano' => 8
];

echo 'O aluno Cristiano fez a prova:' . PHP_EOL;
var_dump(array_key_exists('Cristiano', $grades));

echo 'Você tem certeza' . PHP_EOL;

if (isset($grades['Cristiano']) == null) {
  echo 'Eita, me equivoquei'. PHP_EOL;
} else {
  $i = array_search('Dimitris', array_keys($grades));

  if($i == 0) {
    $name = 'Fulano';
  } else {
    $name = array_keys($grades)[$i];
  }

  echo "Sim $name! Confia!" . PHP_EOL;
};

echo 'Alguém tirou 10?' . PHP_EOL;
echo in_array(10, $grades, true) ? 'Sim'. PHP_EOL : 'Não' . PHP_EOL;

echo 'Quem tirou10?' . PHP_EOL;
echo array_search(10, $grades, true);

?>