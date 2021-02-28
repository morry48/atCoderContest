<?php declare(strict_types=1);

$k = trim(fgets(STDIN));
$taka = str_split(trim(fgets(STDIN)));
$aoki = str_split(trim(fgets(STDIN)));

$takaListMoto = array_count_values($taka);
$aokiListMoto = array_count_values($aoki);
$kumiList = [];
for ($i = 1; $i <= 9; $i++) {
    $kazuTaka = $takaListMoto[$i] ?? 0;
    if ($kazuTaka < $k) {
        for ($j = 1; $j <= 9; $j++) {
            $takaList = $takaListMoto;
            $aokiList = $aokiListMoto;
            $kazuAoki = $aokiListMoto[$j] ?? 0;
            $kazuTakaJ = $takaListMoto[$j] ?? 0;
            $kazuAokiI = $aokiListMoto[$i] ?? 0;
            var_dump($aokiListMoto[$i]);
            exit;
            if ($i == $j) {
                if (($kazuTaka != 0) && ($kazuAoki != 0)) {
                    continue;
                }
            }
            if (($kazuTakaJ + $kazuAoki < $k) && ($kazuAokiI + $kazuTaka < $k)) {
                $takaList[$i]++;
                $aokiList[$j]++;
                $kumiList[] = ['taka' => $takaList, 'aoki' => $aokiList];
            }
        }
    }
}
var_dump(count($kumiList));

$kumisu = count($kumiList);
$count = 0;
$aaa [];
foreach ($kumiList as $kumi) {
    $takaScore = [];
    $aokiScore = [];
    for ($i=1; $i <= 9; $i++) {
             $takaScore[] = pow(10, $kumi['taka'][$i]) * $i ?? $i;
             $aokiScore[] = pow(10, $kumi['aoki'][$i]) * $i ?? $i;
    }
    if (array_sum($takaScore) > array_sum($aokiScore)) {
        $count ++;
    };
}

echo $count / $kumisu;
// //$jは#のこと
// $t = [];
// $a = [];
// for ($i=1; $i <= 9; $i++) {
//     $takaList = $takaListMoto;
//     $aokiList = $aokiListMoto;
//     if (($takaList[$i] < $k) && $aokiList[$i] < $k) {
//         $takaList[$i] = $takaList[$i] + 1;
//         $t[] = $takaList;
//     };
//     if (($takaList[$i] < $k) && $aokiList[$i] < $k) {
//         $aokiList[$i]++;
//         $a[] = $aokiList;
//     }
// }
// $takaToriList = [];
// $aokiToriList = [];
// foreach ($t as $tv) {
//     $takaScore = [];
//     for ($i=1; $i <= 9; $i++) {
//              $takaScore[] = pow(10, $tv[$i]) * $i ?? $i;
//     }
//     $takaToriList[] = array_sum($takaScore);
// }

// foreach ($a as $av) {
//     $aokiScore = [];
//     for ($i=1; $i <= 9; $i++) {
//              $aokiScore[] = pow(10, $av[$i]) * $i ?? $i;
//     }
//     $aokiToriList[] = array_sum($aokiScore);
// }
// $kumisu = count($takaToriList) * count($aokiToriList);
// $takaWinCount = 0;
// foreach ($takaToriList as $takaTen) {
//     foreach ($aokiToriList as $aokiTen) {
//         if ($takaTen > $aokiTen) {
//             $takaWinCount++;
//         }
//     }
// }
// var_dump($takaWinCount);
// var_dump($kumisu);

// echo $takaWinCount / $kumisu;
