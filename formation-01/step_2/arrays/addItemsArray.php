<?php 

$foods = [
  'Lasanha',
  'Frango Frito',
  'JK',
  'Fish and Chips',
  'Kibe assado'
];

array_push($foods, 'Purê de Batata', 'Bife a parmegiana') . PHP_EOL; // add elements in the end of the array
var_dump($foods);

$foods[] = 'Banana Frita';
var_dump($foods);

echo array_shift($foods) . PHP_EOL; // remove the first element of the array
var_dump($foods);

array_unshift($foods, 'Lasanha', 'Muqueca de Peixe'); // add elements in the beginning of the array
var_dump($foods);

echo array_pop($foods) . PHP_EOL; // remove the last element of the array
var_dump($foods);

?>