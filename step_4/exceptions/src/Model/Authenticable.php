<?php

namespace Alura\Bank\Model;

interface Authenticable {
  
  public function auth(string $password): bool;
}

?>

