<?php declare(strict_types=1);

// 標準入力からの入力値を変数に代入します
$input = trim(fgets(STDIN));

// 取得した入力値を半角スペースで分解します
$inputs = explode(' ', $input);

$inputs[0] = floatval($inputs[0]);
$inputs[1] = floatval($inputs[1]);


$ans = (1- ($inputs[1] / $inputs[0])) * 100;

echo $ans;
