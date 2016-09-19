<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/19
 * Time: 14:27
 */

//class Person{
//    public $name;
//    public $age;
//}
//
//$a = new Person();
//$a->name = "晓明";
//$a->age = 10;
////把a变量（对象），赋给$b
//$b = $a;
//$b->age = 20;
//echo $a->name."<br/>";
//echo $b->name."<br/>";
//echo $a->age."<br/>";
//echo $b->age."<br/>";


$a= 78;
//$b= $a;  //涉及的都是基本数据类型，都在栈区，没有到堆区
$b = &$a;  //
//$b = $b+8;  a 86  b  86
$a = $a+8;  //a 86  b  86

echo $a."  ".$b;

$a1=array(1,3,900);
$a2=array(56,90,100);
$arr=array($a1,$a2);
foreach($arr as $k=>$v) {
    echo '$k=$v';
}