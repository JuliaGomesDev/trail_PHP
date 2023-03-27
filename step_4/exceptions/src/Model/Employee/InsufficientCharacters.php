<?php

namespace Alura\Bank\Model\Employee;

class InsufficientCharacters extends \DomainException {

 public function __construct() {
    $message = 'O nome precisa conter mais de 5 caracteres' . PHP_EOL;
    parent::__construct($message);
 }
}
?>