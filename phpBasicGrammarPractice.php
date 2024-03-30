<?php

$input = "こんにちは" ; 
$input = trim($input);

//日本語を使う時は注意。mb_を使う
echo mb_strlen($input) . PHP_EOL;
echo mb_strpos($input, 'に') . PHP_EOL;

$input = str_replace('にち', 'ばん', $input);

echo $input. PHP_EOL;

