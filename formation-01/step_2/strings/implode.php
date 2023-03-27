<?php

$phoneNumbers = ['(21) 99999 - 9999' , '(22) 99999 - 9999', '(23) 99999 - 9999'];

echo implode(separator: PHP_EOL, array: $phoneNumbers). PHP_EOL;

$numbers = '1 2 3 4';

var_dump(explode(' ', $numbers, 2));

$csv = ',Júlia Gomes,21,';

echo trim($csv, ',') . PHP_EOL;
echo ltrim($csv, ',') . PHP_EOL;
echo rtrim($csv, ',') . PHP_EOL;

?>