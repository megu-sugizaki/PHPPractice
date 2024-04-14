<?php
<?php
//クラス
class Post
{
  //変数を定義 ＝ プロパティ（クラス内で宣言する変数）
  public $text;
  public $likes;
  
  //関数を定義 = メソッド このclassのデータ型が持つ変数を扱うので引数はなし
  public function show()
  {
    //class内で変数にアクセスするには$this->を使う
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }
}


// $posts = [];
// $posts[0] = ['text' => 'hello', 'likes' => 0];
// $posts[1] = ['text' => 'hello again', 'likes' => 0];

// function show($post)
// {
//   printf('%s (%d)' . PHP_EOL, $post['text'], $post['likes']);
// }

// show($posts[0]);
// show($posts[1]);