<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/18
 * Time: 9:01
 */
function bubbleSort(&$myarr){
    $temp = 0;
    for($i=0;$i<count($myarr)-1;$i++){
        for($j=0;$j<count($myarr)-1-$i;$j++){
            if($myarr[$j]>$myarr[$j+1]){
                $temp = $myarr[$j];
                $myarr[$j] = $myarr[$j+1];
                $myarr[$j+1] = $temp;
            }
        }
    }
    print_r($myarr);
}
$arr = array(0,5,-1);
bubbleSort($arr);
print_r($arr);