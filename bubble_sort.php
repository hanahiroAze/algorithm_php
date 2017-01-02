<?php

function bubble_sort( &$attr)
{
    $size = count($attr);
    for ($i=0;$i<$size;$i++) {
        for ($j=0;$j<($size-1-$i);$j++) {
            if ($attr[$j+1] < $attr[$j]) {
                $tmp = $attr[$j+1];
                $attr[$j+1] = $attr[$j];
                $attr[$j] = $tmp;
            }
        }
    }
}

$attr = array(10, 50, 40, 30, 12);
bubble_sort($attr);
echo implode(', ', $attr) . PHP_EOL;

