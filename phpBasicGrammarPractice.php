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
