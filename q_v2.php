<?php

$num = gmp_init(362880);

for ($i = 10; $i < 100000; ++$i) {
    $num = gmp_mul($num, $i);
    if ($i % 1000 === 0) {
        echo $i,"\n";
    }
    if ($i % 10 === 0) {
        continue;
    }
    $str = substr((string)$num, 0, 6);
    if (count(array_unique(str_split($str))) === 1) {
        echo $i,":",$str,"\n";
    }
}

