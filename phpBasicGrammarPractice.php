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

//特定日時のtimeスタンプをいちいち計算したくない場合mktimeでその日時のunix time スタンプを作る
//mktimeの引数は時、分、秒、月、日、年
echo date('Y-m-d l', mktime(0, 0, 0, 5, 1)) . PHP_EOL;

//日時っぽい文字列からunix timeスタンプを作る
echo date('Y-m-d l', strtotime('2020-05-07')) . PHP_EOL;
//↑から一日足したい場合
echo date('Y-m-d l', strtotime('2020-05-07')) . PHP_EOL;

//32ビットのマシンでは2038年以降うまく動作しないのでDateTimeクラスを使用する
