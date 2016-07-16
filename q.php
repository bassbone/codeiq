<?php

$num = 362880;

for ($i = 10; $i < 100000; $i++) {
    $num = ltrim(multi($num, $i),'0');
    if ($i % 1000 == 0) {
        echo $i."\n";
    }
    if (count(array_unique(str_split(substr($num, 0, 6)))) < 2) {
        echo $i.":".substr($num, 0, 6)."\n";
    }
}

function multi($a, $b) {

        $tmp_num = str_split($a);
        $num = array_reverse($tmp_num);

	foreach ($num as $key => $val) {
	    $answer[$key] = $val * $b;
	}

	foreach ($answer as $key => $val) {
	    $answer[$key + 1] += floor($answer[$key] / 10);
	    $answer[$key] = $answer[$key] % 10;
	}

        return implode(array_reverse($answer));
}

