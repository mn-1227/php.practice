<?php
//1
function a($x){
    $y= $x*2;
    return $y;
}

//echo a(3);

//2
function sum($a,$b){
    $ab = $a + $b;
    return $ab;
}

//echo sum(1,2);

//3
$arr1 = array(1,3,5,7,9);
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

//5.
//strip_tags
$i = '<p>abc</p>';
//echo strip_tags($i);
//echo $i;

//array_push
$a = [1,2,3];
//array_push($a,4,5);
//print_r($a);

//array_merge
$b = ["赤" => "りんご","黄" => "バナナ",1,2];
$c = ["赤" => "薔薇","ピンク" => "桜",3,4];
$bc = array_merge($b,$c);
//print_r($bc);

//time, mktime
//echo "現在のタイムスタンプは".time()."です。";
//echo mktime(date('H'),date('i'),date('s'),date('m'),date('d'),date('Y'));

//date
//echo date('Y/m/d');

?>