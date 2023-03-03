<?php

$grades = [
  [
    'name' => 'Maria',
    'grade' => 10
  ],
  [
    'name' => 'Charlie',
    'grade' => 5
  ],
  [
    'name' => 'Diana',
    'grade' => 6
  ],
  [
    'name' => 'Amelia',
    'grade' => 7
  ],
  [
    'name' => 'Bob',
    'grade' => 8
  ],
];

$gradeByStudent = [];

foreach($grades as $grade)  
{ 
  $gradeByStudent[] = $grade['grade'];
};

rsort($gradeByStudent);
var_dump($gradeByStudent);

?>