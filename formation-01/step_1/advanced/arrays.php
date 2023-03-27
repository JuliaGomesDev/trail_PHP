<?php

$ageList = [21, 58, 7, 20, 30, 18];

$ageList[] = 89;

for ($i = 0; $i < count($ageList); $i++) {
  echo "O aluno com #id - $i tem: " . $ageList[$i] . " anos" . PHP_EOL;
}

?>