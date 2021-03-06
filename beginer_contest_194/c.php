<?php

$input = trim(fgets(STDIN));

$input2 = explode(' ', trim(fgets(STDIN)));

$kumi = kumiawase($input2, 2);

// $ans = 0;

foreach ($kumi as $arr) {
    $ans = $ans + pow($arr[0] - $arr[1], 2);
}

echo $kumi;

function kumiawase($zentai,$nukitorisu){
    $aa = 0;
    $zentaisu=count($zentai);
    if($zentaisu<$nukitorisu){
      return;
    }elseif($nukitorisu==1){
      for($i=0;$i<$zentaisu;$i++){
        $arrs[$i]=array($zentai[$i]);
      }
    }elseif($nukitorisu>1){
      $j=0;
      for($i=0;$i<$zentaisu-$nukitorisu+1;$i++){
        $ts=kumiawase(array_slice($zentai,$i+1),$nukitorisu-1);
        foreach($ts as $t){
          array_unshift($t,$zentai[$i]);
          $arrs[$j]=$t;
          $aa = $aa + pow($t[0] - $t[1], 2);
          $j++;
        }
      }
    }
    return $aa;
  }