<?php

$name = 'Júlia dos Santos';

$isFamily = str_contains($name, 'Gomes');

if($isFamily){
  echo "$name é da minha família" .PHP_EOL;
} else {
  echo "$name não é da minha família" .PHP_EOL;
}

?>
