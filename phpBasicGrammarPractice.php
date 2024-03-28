<?php
//別型のデータや配列も入れられる
$moreScores = [
  55, 
  72,
  'perfect',
  [90, 42, 88]
];

//前に...を入れると配列の中に配列が入る
$scores = [
90,
40,
...$moreScores,
100
];

print_r($scores);