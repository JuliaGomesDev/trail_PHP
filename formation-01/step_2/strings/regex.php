<?php 

$phoneNumbers = [
  '(21) 99999 - 9999' , 
  '(22) 98888 - 8888', 
  '(23) 97777 - 7777'
];

foreach ($phoneNumbers as $phone) {
  $regex =  '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';

  $validPhones = preg_match(
    $regex, 
    $phone,
    $matches
  ); 

  if($validPhones){
    echo 'Telepone válido' . PHP_EOL;
  } else {
    echo 'Telepone inválido' . PHP_EOL;
  }

  echo preg_replace(
    $regex,
    '(xx) \2',
    $phone
    ) . PHP_EOL;
}

?>
