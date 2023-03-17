<?php

class Owner {

  private bool|string $CPF;
  public readonly string $name;

  public function __construct(string $name, string $CPF) {

    $this->name = $this->validateName($name);
    $this->CPF = $this->validateCPF($CPF);

  }

  public function getCPF(): bool|string
  {
    return $this->CPF;
  }

  private function validateCPF(string $CPF) : bool|string 
  {
    if($CPF == '') {
      return false;
    }

    return $CPF;
  }

  private function validateName(string $name): string 
  {
    if(mb_strlen($name) < 5) {
      echo 'O nome precisa conter mais de 5 caracteres' . PHP_EOL;
      exit();
    }

    return $name;
  } 
}

?>