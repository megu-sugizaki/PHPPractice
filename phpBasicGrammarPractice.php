<?php
class Post
{
  // プロパティ 型を指定できるが弱い型つけ。
  // 数値を入れても文字列にしてくれてしまう
  private string $text;
  private $likes = 0;

  //class自体に紐づいたプロパティやメソッドを作る → static を使う
  private static $count = 0;

    public function __construct(string $text){
    $this->text = $text;

    //いくつインスタンスが作られたか数える
    //static関連の呼び出しにはselfを使用し$マークをつける
    self::$count++;
  }
  
  // メソッド
  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }

  //static関連の呼び出しにはstaticをつける
  public static function showInfo(){
    printf('Count: %d' . PHP_EOL, self::$count);
  }

}

$posts = [];

$posts[0] = new Post( 'hello'); //インスタンス

$posts[1] = new Post('hello again'); //インスタンス

$posts[0]->show();
$posts[1]->show();

//static関連のメソッドの呼び出し
//2つインスタンスを作ったので2とひょうじされる
Post::showInfo();