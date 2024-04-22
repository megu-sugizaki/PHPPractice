<?php

class Post
{
  private $text;

  function __construct($text)
  {
    //3文字以下のテキストが渡されたらメッセージを渡して終了
    //下記のような例外処理は通常のコードと混じってコードの見通しが悪い
    if (strlen($text)<= 3){
      // echo 'Text too short!' . PHP_EOL;
      // exit;
      //とりあえずthrowをしてExceptionクラスのインスタンスを渡す
      //Exceptionはphpに組み込まれているのでクラス定義不要
      throw new Exception('Text too short!');
    }
    $this->text = $text;
  }

  function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}