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
if($fp = fopen($file_path, "r")){
    $file_info = fstat($fp);
    echo "<pre>";
    print_r($file_info);
    echo "</pre>";

    echo "<br/>文件大小：{$file_info['size']}";
    echo "<br/>文件上次修改时间 ".date("Y-m-d H:i:s",$file_info['mtime']);
    echo "<br/>文件上次访问时间 ".date("Y-m-d H:i:s",$file_info['atime']);
    echo "<br/>文件上次change时间 ".date("Y-m-d H:i:s",$file_info['ctime']);
}else{
    echo "打开文件失败";
}

fclose($fp);

//不打开文件 读取文件
echo "<br/>".filesize($file_path);
echo "<br/>".date("Y-m-d H:i:s",fileatime($file_path));


