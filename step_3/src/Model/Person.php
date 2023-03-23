<?php

namespace Alura\Bank\Model;

class Person {
  protected string $name;
  protected Cpf $cpf;
  public function __construct(string $name, Cpf $cpf) 
  {
    $this->name = $this->validateName($name);
    $this->cpf = $cpf;
  }
  public function getName(): string
  {
    return $this->name;
  }
  public function getCpf(): string
  {
    return $this->cpf->getCpf();
  }
  protected function validateName(string $name): string 
  {
    if(mb_strlen($name) < 5) {
      echo 'O nome precisa conter mais de 5 caracteres' . PHP_EOL;
      exit();
    }

    return $name;
  }
}

?>