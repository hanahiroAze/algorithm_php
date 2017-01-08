<?php
$lc_seed = 1;

function lc_rand()
{
    global $lc_seed;
    $mask = 0xffffffff;
    $lc_seed = (1103515245 * $lc_seed + 12345) & $mask;

    return ($lc_seed / 65536) % 32768;
}

function lc_srand($seed)
{
    global $lc_seed;
    $lc_seed = $seed;
}

lc_srand(time());
$list = array('A', 'B', 'C', 'a', 'b', 'c');
for ($i=0;$i<256;$i++) {
    $c = $list[lc_rand() % 6];
    echo $c;
    if ($i % 16 == 15) echo PHP_EOL;
}