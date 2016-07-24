<?php

$input = [];

/* 標準入力の読み込み */
while ($line = fgets(STDIN)) {
    $input[] = $line;
}

$num_cnt = $input[0];
$arr_num = explode(" ", $input[1]);

for ($i = 0; $i < $num_cnt; $i++) {
    if (in_array(256 - $arr_num[$i], array_diff($arr_num, array($arr_num[$i])))) {
	echo 'yes'.PHP_EOL;
	exit;
    }
}

echo 'no'.PHP_EOL;
exit;

