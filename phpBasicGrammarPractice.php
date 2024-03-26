<?php

//数字が文字列に入っていた場合はintとしてみてほしくない時強い型つけ
declare (strict_types = 1);

//引数の型の指定と返り値voidの設定
function showInfo(string $name, int $score): void
{
  echo $name . ': ' . $score . PHP_EOL;
}

showInfo('Meg', 40);
// showInfo('Meg', 'dotinstall');

//文字列でも可能な限り正しい型に変換
showInfo('Meg', '4');
