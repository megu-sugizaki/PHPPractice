<?php
$numbers = range(1, 10);

//それぞれの要素にtrue/falseを返す関数を適用し、trueのだったものについてのみ
//要素を取り出して新しい配列を返す
//array_mapと逆で左に配列、右に関数

//偶数のみ抽出
$evenNumbers = array_filter(
  $numbers, 
  // function($n){
    // if($n % 2 === 0){
    //   return true;
    // } else {
    //   return false;
    // }
    //上の代わりに
    fn($n) => $n % 2 === 0
  // }
  );
  
  print_r($evenNumbers);