<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/18
 * Time: 8:38
 */

//$arr[0] = 123;
//$arr[1] = 456;
//$arr[2] = 'hello';
//echo "<br/>***before***";
//echo $arr[1]."<br/>";
//unset($arr[1]);
//echo "<br/>***after****";
//echo $arr[1];
//echo print_r($arr);

/*数组运算与顺序有关*/
$a = array("a"=>"apple","b"=>"banana");
$b = array("a"=>"pear","b"=>"stray","c"=>"cherry");

$c = $a+$b;
echo "\$a+\$bresult<br/>";
var_dump($c);

$c = $b+$a;
echo "\$b+\$aresult<br/>";
var_dump($c);













