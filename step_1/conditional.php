<?php

$age = 18;

echo "Você só pode entrar se tiver a partir de 18 anos" . PHP_EOL;

if ($age >= 18) {
  echo "Você tem $age anos. Pode entrar\n";
} else {
  echo "Você é menor de idade. Não pode entrar\n";
}