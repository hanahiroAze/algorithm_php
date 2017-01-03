<?php

function merge_sort(&$attr)
{
    $attr = merge_sort_split($attr);
}

function merge_sort_split($attr)
{
    if (count($attr) == 1) return $attr;

    $mid = floor(count($attr)/2);
    $left = array_slice($attr, 0, $mid);
    $right = array_slice($attr, $mid, count($attr));
    $left = merge_sort_split($left);
    $right = merge_sort_split($right);

    return merge_sort_merge($left, $right);
}

function merge_sort_merge($left, $right)
{
    $result = array();
    while (count($left) && count($right)) {
        if ($left[0] < $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }

    return array_merge($result, $left, $right);
}

$attr = array(20, 10, 100, 34, 30, 21, 200);
merge_sort($attr);
echo implode(', ', $attr);