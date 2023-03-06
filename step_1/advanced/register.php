<?php

$students2022 = [
  'João',
  'Maria',
  'John',
  'Carol',
  'Beatriz'
];

$newStudents = [
  'Felipe',
  'José',
  'Mario',
  'Alexander',
  'Jeff',
];

$students2023 = array_merge($students2022, $newStudents);
$students2023WithConcatenation = $students2022 + $newStudents; // don't overwrite the keys already existing

var_dump($students2023);
var_dump($students2023WithConcatenation);

$unpackingArray = [...$students2022, ...$newStudents];

var_dump($unpackingArray);

?>
