<?php

function showAdd($message = 'Ad'){
  echo'---------' . PHP_EOL;
  echo '---' . $message . '---' . PHP_EOL;
  echo '--------' . PHP_EOL;
}


showAdd('Header Ad');
echo 'Tom is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;

// showAdd('Ad');
showAdd();

echo 'Steve is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;

showAdd('Footer Ad');