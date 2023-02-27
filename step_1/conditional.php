<?php

$age = 18;
$numberOfPersons = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou "; 
echo "a partir de 16 anos acompanhado". PHP_EOL;

if ($age >= 18) {
  echo "Você tem $age anos. Pode entrar\n";
} else if ($age > 16 && $numberOfPersons > 1) {
  echo "Você tem $age anos e está acompanhado(a). Pode entrar\n";
} else {
  echo "Você tem $age e está sozinho. Não pode entrar\n";
}

$nationality = 'brasileiro';
$message = $nationality == 'brasileiro' ? "Você é $nationality. Pode entrar\n" : "Você é $nationality. Não pode entrar" . PHP_EOL;

echo $message;