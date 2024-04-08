<?php
$scores = [
'Meg' => 80,
'Chihiro' => 70,
'Taka' => 60,
];

//キーだけ配列で取り出したい
$keys = array_keys($scores);

//値だけ取り出したい
$values = array_values($scores);

print_r($keys);
print_r($values);

//特定のキーがあるか調べたい
if(array_key_exists('Meg', $scores) === true){
  echo 'Meg is here' . PHP_EOL;
}

//特定の値があるか調べたい
if(in_array(80, $scores) === true){
  echo '80 is here!' . PHP_EOL;
}

//値を配列から検索して対応するキーをかえす
echo array_search(70, $scores). PHP_EOL;