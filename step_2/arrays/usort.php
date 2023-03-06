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
];

sort($grades);
var_dump($grades);
function orderedGrades(array $grade1, array $grade2) : int
{ 
  // first option
  return $grade1['grade'] <=> $grade2['grade'];

  /* second option
    
    if ($grade1['grade'] === $grade2['grade']) {
      return 0;  
    };
    
    return ($grade1['grade'] < $grade2['grade']) ? -1 : 1; 
  */ 
};

usort($grades, 'orderedGrades');
var_dump($grades);

?>