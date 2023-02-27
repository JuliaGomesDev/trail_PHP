<?php

$age = 17;
$numberOfPersons = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou "; 
echo "a partir de 16 anos acompanhado". PHP_EOL;

if ($age >= 18) {
  echo "Você tem $age anos. Pode entrar\n";
} else {
    if ($age > 16 && $numberOfPersons > 1) {
      echo "Você tem $age anos e está acompanhado. Pode entrar\n";
    } else {
      echo "Você não atende aos requisitos para entrar\n";
    }
}