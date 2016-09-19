<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/8
 * Time: 15:41
 */

//用于响应用户取数据的请求
$getter = $_POST['getter'];
$sender = $_POST['sender'];

file_put_contents("d:/mylog.log",$getter."-".$sender."\r\n",FILE_APPEND );
?>