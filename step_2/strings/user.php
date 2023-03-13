<?php 

// declare variables

$email = 'júlia@novahaus.com.br';
$password = 'júlíáá';

// find the position of the occurrence of a substring in a string

$atPosition = strpos($email, '@');

// find a user inside of the email

$user = substr($email, 0, $atPosition);

echo mb_strtoupper($user) . PHP_EOL;
echo substr($email, $atPosition) . PHP_EOL;

// show the value in bytes of the variable password 

var_dump(strlen($password));

// show the value of character that inside the password

var_dump(mb_strlen($password));

// strlen returns the number of bytes

if(mb_strlen($password) < 8) { 
  echo 'Insecure Password' . PHP_EOL;
} else {
  echo $password . PHP_EOL;
}

 
?>