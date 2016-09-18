<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/18
 * Time: 14:44
 */
$file_path = "test.txt";
//if(file_exists($file_path)){
//    $fp = fopen($file_path, "w+");
//    $con = "\r\nhello";
//    for($i=0;$i<10;$i++){
//        fwrite($fp, $con);
//    }
//
//}else{
//
//}
//echo "添加成功";
//fclose($fp);

$con = "helloworld\r\n";

file_put_contents($file_path, $con,FILE_APPEND);

