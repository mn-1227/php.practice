<?php
//1
function a($x){
    echo $x*2;
}

//a(3);

//2
function sum($a,$b){
    echo $a + $b;
}

//sum(1,2);

//3
$arr1 = array(1,3,5,7,9);
$total = 1;
function i($arr){
    $total = 1;
    foreach ($arr as $value){
        $total = $total*$value;
    }
    return $total;
}
//echo i($arr1);

//４
function max_array($arr){

    $max_number = $arr[0];
    foreach($arr as $a){
        if ($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}

//echo max_array(array(1,2,3,4,5));

strip_tags
array_push
array_merge
time, mktime
date
?>