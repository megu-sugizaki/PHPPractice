<?php
$a = [3, 4, 8];
$b = [4, 8, 12];

//配列同士の連結
// $merged = array_merge($a, $b);
//上と同じ意味
$merged = [...$a, ...$b];

// print_r($merged);

//重複した値を取り除く
//元配列に変更なし、新たに配列を作成
$uniques = array_unique($merged);
// print_r($uniques);

//前配列からあと配列をひく($aから$bを引く)
//新しい配列を返す
$diff1 = array_diff($a, $b);
print_r($diff1);

//$bから$aをひく
$diff2 = array_diff($b, $a);
print_r($diff2);

//共通要素を抽出
$common = array_intersect($a, $b);
print_r($common);