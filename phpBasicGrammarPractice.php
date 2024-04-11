<?php
//UNIXタイムスタンプ→基準はGMT、時間が数値で出てくる
//date(フォーマット, UNIXタイムスタンプ)→date('Y-m-d', time());
//dateはローカルタイムで表示
//dateの中身
//H:i:s → 時間:分:秒, l → 曜日, W → 1年のうち第何周目か

//1秒ごとに実行すると1ずつ増える
echo time() . PHP_EOL;

//↑は数値なのでdate関数でわかりやすく表示
//日付 + 時間
echo date('Y-m-d l', time()) . PHP_EOL;
//time()は省略可能
echo date('Y-m-d l') . PHP_EOL;