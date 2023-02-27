<?php

$id = 16;

while ($id <= 15) {
  echo "#$id" . PHP_EOL;
  $id = $id + 1;
}

for ($order = 11; $order <= 10; $order++) {
  echo "O pedido $order está pronto" . PHP_EOL;
}

for ($counter = 10; $counter >= 0; $counter--) {
  if ($counter <= 6 && $counter >= 3) {
    echo "...\n";
    continue;
  } else if ($counter == 0) {
    break;
  }

  echo "A bomba vai estourar em $counter ..." . PHP_EOL;
}

echo "Boow!!!\n";