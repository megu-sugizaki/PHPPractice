<?php

$a = 'hello';
$b = 20;
$c = -1.3;
$d = null;
$e = true;

//データ型を調べるための命令
// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);

//データ型を変えられるキャスト型という命令
$a = (float)10;
$b = (string)1.3;

var_dump($a);
var_dump($b);

