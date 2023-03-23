<?php

namespace Alura\Bank\Model;
trait Getters {
  public function __get(mixed $atribute)
  {
    $method = 'get' . ucfirst($atribute);
    return $this->$method();
  }
}
?>