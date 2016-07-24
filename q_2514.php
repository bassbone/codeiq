<?php

$input = [];

/* 標準入力の読み込み */
while ($line = fgets(STDIN)) {
    $input[] = $line;
}

$arr_num = explode(" ", $input[0]);

$cnt = 0;

for ($i = 0; $i <= $arr_num[0]; $i++) {
	if ($arr_num[1] == substr_count(decbin($i), '1')) {
		$cnt++;
	}
}

echo $cnt.PHP_EOL;
exit;

