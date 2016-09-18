<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/18
 * Time: 13:41
 */

//打开文件
$file_path = "test.txt";
//该函数返回一个指向文件的指针
//新判断文件是否存在
/*第一种读取方式*/
//if(file_exists($file_path)){
//    $fp = fopen($file_path,"a+");
//    //度读取内容并输出
//
//    $con = fread($fp, filesize($file_path));
//    echo "读取的内容是<br/>";
//    $con = str_replace('\r\n',"<br/>" ,$con );
//    echo $con;
//    fclose($fp);
//}else{
//    echo "文件不存在";
//}

/*第二种读取*/
//$con = file_get_contents($file_path);
//$con = str_replace('\r\n',"<br/>" ,$con );
//echo $con;

/*第三种读取方式 循环读取（大文件）*/
$fp = fopen($file_path, "a+");
$buffer = 1024;
$str = "";
while(!feof($fp)){
    $str = fread($fp, $buffer);
}

$str = str_replace("\r\n","<br/>" ,$str );
echo $str;
fclose($fp);







