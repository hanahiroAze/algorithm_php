<?php
function quick_sort(&$attr)
{
    if (count($attr) < 2) return $attr;

    $left = $right = array();
    $pivot = array_shift($attr);
    foreach ($attr as $v) {
        if ($v < $pivot) {
            $left[] = $v;
        } else {
            $right[] = $v;
        }
    }
    quick_sort($left);
    quick_sort($right);
    $attr = array_merge($left, array($pivot), $right);
}

$attr = array(20, 10, 100, 34, 30, 21, 200);
quick_sort($attr);
echo implode(', ', $attr) . PHP_EOL;