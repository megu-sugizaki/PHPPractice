<?php
//親クラス（Super class）
class Post
{
  private string $text;
  private $likes = 0;

  private static $count = 0;

  public const VERSION = 0.1;

    public function __construct(string $text){
    $this->text = $text;
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

//Post Classを引き継ぐ 子クラス(Sub class)
class SponsoredPost extends Post{

}

$posts = [];
$posts[0] = new Post( 'hello'); //インスタンス
$posts[1] = new Post('hello again'); //インスタンス
//Post classを引き継いだSponsoredPostクラスのインスタンスを作成 = 継承
$posts[2] = new Post('hello hello');

$posts[0]->show();
$posts[1]->show();
$posts[2]->show();

//static関連のメソッドの呼び出し
//2つインスタンスを作ったので2とひょうじされる
Post::showInfo();

//publicにしたのでクラスから直接呼び出すことができる
echo Post::VERSION .PHP_EOL;