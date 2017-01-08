<?php
require_once 'Queue.php';

$que = new Queue();
$que->enqueue('aaa');
$que->enqueue('bbb');
$que->enqueue('ccc');

while ($que->length() > 0) {
    echo $que->dequeue() . PHP_EOL;
}
