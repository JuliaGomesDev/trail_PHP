<?php

require_once 'autoload.php';

use Alura\Bank\Model\Cpf;
use Alura\Bank\Model\Employee\{Developer, Director, Manager};
use Alura\Bank\Service\{Auth, BonusController};

$developer1 = new Developer(
  'João Gabriel', 
  new Cpf('123.469.789-00'),  
  2000);

$developer1->upLevel();

$director1 = new Director(
  'Maria', 
  new Cpf('123.469.893-00'),  
  5000);

$manager1 = new Manager(
  'Eustaquio', 
  new Cpf('123.569.789-00'), 
  3000);

$controller = new BonusController();
$controller->addBonus($developer1);
$controller->addBonus($director1);
$controller->addBonus($manager1);

echo $controller->getTotalBonus() . PHP_EOL;

$authController = new Auth();
$authController->authentication($manager1, '4321')


?>