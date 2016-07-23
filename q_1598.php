<?php

$input = [];

/* 標準入力の読み込み */
while ($line = fgets(STDIN)) {
    $input[] = $line;
}

/* 素数リストの作成 */
$sosuu = createSosuuList(200000);

foreach ($input as $i) {
    /* 素数の数をカウント */
    echo countSosuu($sosuu, $i).PHP_EOL;
}

exit;

function createSosuuList($max) {
    $sosuu = [];
    for ($i = 2; $i < $max; $i++) {
        $sosuu[$i] = true;
    }
    for ($i = 2; $i < $max; $i++) {
	for ($j = 2; $j < floor($max / $i); $j++) {
	    $sosuu[$i * $j] = false;
	}
    }
    return $sosuu;
}

function countSosuu($sosuu_list, $num) {
    $cnt = 0;
    foreach ($sosuu_list as $key => $value) {
        if ($key >= $num) {
	    break;
	}
	if ($value) {
	    $cnt++;
	}
    }
    return $cnt;
}

