<?php

//数字が文字列に入っていた場合はintとしてみてほしくない時強い型つけ
declare (strict_types = 1);

// 型の前に？マークでnullかその型か
function getAward(?int $score): ?string
{
  return $score >= 100 ? 'Gold Medal' : null;
}

echo getAward(150) . PHP_EOL;
echo getAward(40) . PHP_EOL;