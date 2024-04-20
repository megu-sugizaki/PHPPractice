<?php

class Post
{
  private $text;

  function __construct($text)
  {
    $this->text = $text;
  }

  function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}

$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');

foreach ($posts as $post) {
  $post->show();
}