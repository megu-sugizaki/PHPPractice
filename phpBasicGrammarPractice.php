<?php
$data = [
  ['name' => 'Meg', 'score' => 80],
  ['name' => 'Chihiro', 'score' => 60],
  ['name' => 'Taka', 'score' => 70],
  ['name' => 'Henry', 'score' =>60],
];

//$scoreの小さい順
//何を基準に並べ替えるか自分で定義できる
//元配列を直接書き換える
usort(
  //まず配列を渡す
  $data,
  //2つの値が同じで順番を変えたくない時は0を返す
  function($a, $b){
    if($a['score'] === $b['score']){
      return 0;
    }
    //$a > $ $bなら1を、そうじゃないなら-1を返す
    return $a['score'] > $b['score'] ? 1 : -1;
  }
);

//scoreの順に並び替えられている→usortでは1つの項目しか並び替えられない
//scoreが同じ時、nameはアルファベット順にならない
print_r($data);

//名前でも並び替えたい
//array_multisortを使うとまず$aを基準に並び替えられて、$bもつられて変わる
//$aの値が同じものに関してのみ$bが並び変わる

//$dataから'score'のキーの値だけを抜き取る
$scores = array_column($data, 'score');
//$dataから'name'のキーの値だけを抜き取る
$names = array_column($data, 'name');

print_r($scores);
print_r($names);

//デフォルトだと小さい順、アルファベット順
//自分で並び方を指定できる
array_multisort(
  $scores, SORT_DESC, SORT_NUMERIC,
  $names, SORT_DESC, SORT_STRING,
  $data
);

print_r($data);
