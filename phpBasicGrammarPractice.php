<?php 
$name = "Meg";

//この中に書いたテキストの字下げや開業は保持。
//始めのEOTの後は改行。EOTは好きな名前でいいが End of TextでEOTがわかりやすい
$text = <<< 'EOT'
hello!
  this is looooong
text!
EOT;

echo $text;

//textを""で囲むか何もつけずにおくと中に変数を埋め込める
$text = <<< "EOT"
hello! $name
  this is looooong
text!
EOT;

echo $text;