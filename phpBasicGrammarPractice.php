<?php
class Post
{
  // プロパティ 型を指定できるが弱い型つけ。
  // 数値を入れても文字列にしてくれてしまう
  private string $text;
  private $likes = 0;

  //class自体に紐づいたプロパティやメソッドを作る → static を使う
  //クラスプロパティ
  private static $count = 0;

  //classに紐づいた定数を定義
  //大文字にして$マークはつけない
  //定数はうっかり別の値になることはないのでpublicでもOK
  //クラスに紐づいた定数 = オブジェクト定数
  public const VERSION = 0.1;

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
  //クラスメソッド
  public static function showInfo(){
    printf('Count: %d' . PHP_EOL, self::$count);

    //浮動小数で小数点以下1桁まで表示の設定
    printf('VERSION: %.1f' . PHP_EOL, self::VERSION);
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

//publicにしたのでクラスから直接呼び出すことができる
echo Post::VERSION .PHP_EOL;