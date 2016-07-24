<?php

$input = [];

/* 標準入力の読み込み */
while ($line = fgets(STDIN)) {
    $input[] = $line;
}

$num = rtrim($input[0]);

$coins = [500, 100, 50, 10, 5];

echo calcOtsuri($num, $coins).PHP_EOL;
exit;

function calcOtsuri($money, $coins) {
	if ($money == 0) {
		return 1;
	} elseif ($money < 0) {
		return 0;
	}
	if (count($coins) == 0) {
		return 1;
	}
	$cnt = 0;
	$coin = $coins[0];
	for ($i = floor($money / $coin); $i >= 0; $i--) {
		$cnt += calcOtsuri($money - $coin * $i, array_slice($coins, 1));
	}
	return $cnt;
}
