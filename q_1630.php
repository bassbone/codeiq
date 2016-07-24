<?php

ini_set('memory_limit', '512M');

$input = [];

/* 標準入力の読み込み */
while ($line = fgets(STDIN)) {
    $input[] = $line;
}

foreach ($input as $i) {
    echo countSeven(rtrim($i)).PHP_EOL;
}

exit;

function countSeven($num) {
    $arr_num = str_split((string)$num);
    return calcSeven($arr_num[0], array_slice($arr_num, 1));
    var_dump($arr_num);
}

function calcSeven($top, $num) {
    $cnt = 0;
    if (count($num) == 0) {
        if ($top >= 7) {
            return 1;
        } else {
            return 0;
        }
    }
    for ($i = 0; $i <= $top; $i++) {
        if ($i == $top) {
	    $cnt += calcSeven($num[0], array_slice($num, 1));
	    if ($i == 7) {
                $cnt += (int)(implode($num)) + 1;
	    }
	} else {
	    $cnt += count($num) * pow(10, count($num) - 1);
	    if ($i == 7) {
	        $cnt += pow(10, count($num)) ;
	    }
	}
    }
    return $cnt;
}
