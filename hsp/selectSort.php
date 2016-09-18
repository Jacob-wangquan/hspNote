<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/18
 * Time: 9:16
 */

function selectSort(&$arr){
    $temp = 0;
    for($i=0;$i<count($arr)-1;$i++){
        $minVal = $arr[$i];
        $minIndex = $i;
        for($j=$i+1;$j<count($arr);$j++){
            if($minVal>$arr[$j]){
                $minVal = $arr[$j];
                $minIndex = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
    }
    print_r($arr);
}

$arr = array(1,5,-1);
selectSort($arr);
print_r($arr);