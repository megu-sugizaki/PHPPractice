<?php

//名前空間をいちいち書くのは面倒 MyPHPAppという名前で呼べるようにする
// use Dotinstall\MyPHPApp as MyPHPApp;
//上と同じ意味
use Dotinstall\MyPHPApp;

require('Post.php');

//同じ名前のクラスは作れない
//名前の衝突を避けるために名前空間を別ファイルのクラスの方に作成する
class Post {}

//同名のクラスがあってもエラーにならないように名前空間を呼び出す
$posts[0] = new MyPHPApp\Post('hello');
$posts[1] = new MyPHPApp\Post('hello again');

foreach ($posts as $post) {
  $post->show();
}
