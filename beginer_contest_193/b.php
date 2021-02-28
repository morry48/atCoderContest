<?php declare(strict_types=1);

// 標準入力からの入力値を変数に代入します
$input = trim(fgets(STDIN));
$inputs = [];
for ($i = 0; $i < $input; $i++) {
    $inputs[] = explode(' ', trim(fgets(STDIN)));
}
$ansArr = [];
for ($i = 0; $i < $input; $i++) {
    if ($inputs[$i][0] < $inputs[$i][2]) {
        $ansArr[] = $inputs[$i][1];
    }
}

if (empty($ansArr)) {
    $ans = -1;
} else {
    $ans = min($ansArr);
}

echo $ans;
