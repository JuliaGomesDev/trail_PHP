<?php 

$url = 'https://teste.com';

if(str_starts_with($url, 'https')) {
  echo 'É uma URL segura';
} else {
  echo 'Não uma URL segura';
};

echo PHP_EOL;

if(str_ends_with($url, 'br')) {
  echo 'É um donínio brasileiro';
} else {
  echo 'Não um donínio brasileiro';
}

?>