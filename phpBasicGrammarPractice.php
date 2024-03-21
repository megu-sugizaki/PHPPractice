<?php
$name = 'Meg';
//再代入
$name = 'dotinstall';

// 定数, 変数名は基本大文字、ドルマークは使わない
define('NAME', 'Meg');

//エラーではないが、再代入すると警告が出る
define('dotinstall', 'Meg');
echo NAME . PHP_EOL;