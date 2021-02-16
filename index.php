<?php
function newArray($arr1,$arr2){
    $count1=count($arr1);
    $count2=count($arr2);
    $newArr=[];
    $count3=$count1+$count2;
    $index=0;
    for ($i=0;$i<$count1;$i++){
        $newArr[$i]=$arr1[$i];
        $index=$i;
    }
    for ($j=$index+1,$i=0;$j<$count3,$i<$count3,$i<$count2;$j++,$i++){
        $newArr[$j]=$arr2[$i];
    }
    return $newArr;
}

var_dump( newArr([1,5,3,7],[12,8,6,4]));