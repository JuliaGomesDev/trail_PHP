<?php 

// declare variables

$userName = 'Júlia Gomes';
$email = 'júlia@novahaus.com.br';
$password = 'júlíáá';

// find the position of the occurrence of a substring in a string

$atPosition = strpos($email, '@');

// find a text inside of the variable

$user = substr($email, 0, $atPosition);
echo substr($email, $atPosition + 1) . PHP_EOL;

// Treat the string as upper case

echo mb_strtoupper($user) . PHP_EOL;

// show the value in bytes of a variable  

var_dump(strlen($password));

// show the value of character that inside of a variable

var_dump(mb_strlen($password));

if(mb_strlen($password) < 8) { 
  echo 'Insecure Password' . PHP_EOL;
} else {
  echo $password . PHP_EOL;
}

// explode transform a string in a array

$nameArray = explode(' ', $userName);

list($name, $lastname) = $nameArray;

echo 'Nome: '. $name . PHP_EOL;
echo 'Sobrenome: '. $lastname . PHP_EOL;
 
?>