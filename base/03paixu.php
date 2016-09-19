<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/18
 * Time: 9:01
 */

$arr = array(0,5,-1);
$temp = 0;
for($i=0;$i<count($arr)-1;$i++){
    for($j=0;$j<count($arr)-1-$i;$j++){
        if($arr[$j]>$arr[$j+1]){
            $temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $temp;
        }
    }
}
print_r($arr);