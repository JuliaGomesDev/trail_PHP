<?php 

// $data = [
//   001 => [
//     'Carmem',
//     25, 
//     1.78, 
//     'Auxiliar Administrativo'
//   ],
//   002 => [
//     'Rafael',
//     48, 
//     1.80, 
//     'Gerente Financeiro'
//   ]
// ];

// foreach ($data as $employee)
// {
//   list($name, $age, $height, $position) = $employee;

//   var_dump($name);
//   var_dump($age);
//   var_dump($height);
//   var_dump($position);
// };

use JetBrains\PhpStorm\Pure;

$data2 = [
  'name' => 'João',
  'age' => 20,
  'weight' => 89, 
];

extract($data2);
var_dump($name, $age, $weight);

var_dump(compact('name', 'age', 'weight'));

?>