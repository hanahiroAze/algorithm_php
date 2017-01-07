<?php
$text = 'This　is a  test';
echo substr_count($text, ' ') . PHP_EOL;
echo mb_substr_count($text, '　') . PHP_EOL;

// 重なっている副文字列はカウントされないので、1 が表示される
$text2 = 'gcdgcdgcd';
echo substr_count($text2, 'gcdgcd');