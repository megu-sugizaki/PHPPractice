<?php
//読み込むクラスが多くなるといちいち書くのが面倒
//auto load を使う
//newをした時にそのクラスが読み込まれていなかったら呼ばれるクラス
//そのクラス名を下記の無名関数の引数として渡す
//newされた時にpostの文字列が$classに渡されてautoloadを実行
spl_autoload_register(function ($class){
  require($class . '.php');
});

// require('Post.php');

//ここのPostの部分が$classに代入される。
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');

foreach ($posts as $post) {
  $post->show();
}
