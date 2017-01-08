<?php

function comb_sort(&$attr)
{
    $gap = $size = count($attr);
    $swap = true;
    while ($gap > 1 || $swap) {
        if ($gap > 1) {
            $gap = floor($gap / 1.25);
            if ($gap == 9 || $gap == 10) $gap = 11;
        }

        $swap = false;
        $i = 0;
        while ($i + $gap < $size) {
            if ($attr[$i] > $attr[$i + $gap]) {
                $tmp = $attr[$i];
                $attr[$i] = $attr[$i + $gap];
                $attr[$i + $gap] = $tmp;
                $swap = true;
            }
            $i++;
        }
    }
}

$attr = array(10, 50, 40, 30, 12);
comb_sort($attr);
echo implode(', ', $attr) . PHP_EOL;