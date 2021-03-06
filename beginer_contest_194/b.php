<?php

$input = trim(fgets(STDIN));

$as = [];
$bs = [];
for ($i = 0; $i < $input; $i++) {
    $inputs = explode(' ', trim(fgets(STDIN)));
    $as[] = $inputs[0];
    $bs[] = $inputs[1];
}
$minKeyA = array_keys($as, min($as));
$minKeyB = array_keys($bs, min($bs));

$ansArr = [];
$ans = max([min($as), min($bs)]);

if ($minKeyA == $minKeyB) {
    sort($as);
    sort($bs);
    $aMin2 = $as[1];
    $bMin2 = $bs[1];
    if (min($as) + min($bs) <= (max([min($bs), $aMin2])) && min($as) + min($bs) <= (max([min($as), $bMin2]))) {
        $ans = min($as) + min($bs);
    } elseif (max([min($bs), $aMin2]) <= max([min($as), $bMin2])) {
        $ans = max([min($bs), $aMin2]);
    } else {
        $ans = max([min($as), $bMin2]);
    }
} 

echo $ans;
