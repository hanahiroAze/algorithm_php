<?php
require_once 'Stack.php';

$stack = new Stack();
$stack->push('aaa');
$stack->push('bbb');
$stack->push('ccc');

while ($v = $stack->pop()) {
    echo $v .PHP_EOL;
}