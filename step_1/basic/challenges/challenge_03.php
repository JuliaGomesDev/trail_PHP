<?php

//  Verificando IMC

$weight = 122;
$height = 1.64;

$calculation = $weight / ($height * $height);

if ($calculation <= 18.5) {
  echo "Você está com baixo peso\n";
} else if ($calculation <= 24.9) {
  echo "Seu peso está normal\n";
} else if ($calculation <= 29.9) {
  echo "Você está com sobrebeso\n";
} else if ($calculation <= 34.9) {
  echo "Você está com obsidade grau I\n";
} else if ($calculation <= 39.9) {
  echo "Você está com obsidade grau II\n";
} else {
  echo "Você está com obsidade grau III\n";
} 