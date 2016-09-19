<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/18
 * Time: 8:53
 */

$grades = $_POST['grade'];

$grades = explode(" ", $grades);

$allGrades = 0;
foreach ($grades as $k=>$v){
    $allGrades += $v;
}
echo "平均时间是=".$allGrades/count($grades);