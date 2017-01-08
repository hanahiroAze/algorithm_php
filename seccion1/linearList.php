<?php

$listData = array();

for ($i = 0; $i < 10; $i++) {
    $record = array('id' => $i, 'data' => 'data' . $i);
    array_push($listData, $record);
}

$k = rand(0, 9);
$hit = $listData[$k];

echo 'id:' . $hit['id'] . "\n";
echo 'data:' . $hit['data'] . "\n";