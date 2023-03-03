<?php

// array_diff - check the difference between two arrays through of values
// array_diff_key - check the difference between two arrays through of keys
// array_diff_assoc - check the difference between two arrays considering key and value
// array_keys - catch key of array
// array_values - catch values of array
// array_combine - combine two arrays together
// array_flip - flip the keys with the values of arrays

$gradesBimester1 = [
  'Antonio' => 10,
  'Marcela' => 9,
  'José' => 4,
  'Dimitris' => 3,
  'Cristiano' => 7,
  'Jessica' => 1
];

$gradesBimester2 = [
  'Antonio' => 10,
  'Marcela' => 9,
  'Carlos' => 8,
  'Romeu' => 3,
  'Cristiano' => 5
];

$absantStudents = array_diff_key($gradesBimester1, $gradesBimester2);
$studentsNames = array_keys($absantStudents);
$studentsGrades = array_values($absantStudents);

var_dump(array_combine($studentsGrades, $studentsNames));
var_dump(array_flip($absantStudents))

?>
