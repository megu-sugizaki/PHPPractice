<?php
$n = 5.6283;

//小数点以下切り上げ
echo ceil($n) . PHP_EOL;

//小数点以下切り捨て
echo floor($n) . PHP_EOL;

//四捨五入して整数に
echo round($n) . PHP_EOL;

//小数点以下2桁になるように四捨五入
echo round($n, 2) . PHP_EOL;