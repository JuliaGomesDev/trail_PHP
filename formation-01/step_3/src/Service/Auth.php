<?php

namespace Alura\Bank\Service;

use Alura\Bank\Model\Authenticable;

class Auth {

  public function authentication(Authenticable $authenticable, string $password) 
  {
    if($authenticable->auth($password)) {
      echo 'Ok. Usuário logado no sistema' . PHP_EOL;
    } else {
      echo 'Ops. Senha incorreta' . PHP_EOL;
    }
  }
}

?>