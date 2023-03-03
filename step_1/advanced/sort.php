<?php

// Ordernation interger's array - of less to more

$grades = [
  10,
  2,
  6,
  8
];

$gradeOrdered = $grades;

echo 'Desordenado' . PHP_EOL;
var_dump($grades);


echo 'Ordenado' . PHP_EOL;
sort($gradeOrdered);
var_dump($gradeOrdered);

// Ordenation of string's array - to alphabetic order

$numbers = [
  'five',
  'two',
  'one',
  'four',
  'three',
  'six',
];

$numbersOrdered = $numbers;

echo 'Desordenado' . PHP_EOL;
var_dump($numbersOrdered);

echo 'Ordenado'. PHP_EOL;
sort($numbersOrdered);
var_dump($numbersOrdered);

?>
