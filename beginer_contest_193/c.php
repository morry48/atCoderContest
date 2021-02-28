<?php declare(strict_types=1);

// 標準入力からの入力値を変数に代入します
$input = trim(fgets(STDIN));
$r = [];
$i = 2;
while ($i * $i <= $input) {
    $j = 2;
    while (pow($i, $j) <= $input) {
        $a = pow($i, $j);
        $r[] = $a;
        ++$j
    }
    ++$i;
}

echo $input - count(array_unique($r));
