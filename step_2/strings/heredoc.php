<?php
function getEmail(string $name) : void 
{
    $emailContent = <<<STR
      Olá $name!

      Estamos entrando em contato para
      {motivo}
      
      {assinatura}
    STR;

  echo $emailContent . PHP_EOL;
};

getEmail(name: 'Júlia');


?> 