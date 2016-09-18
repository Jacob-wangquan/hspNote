<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/18
 * Time: 14:44
 */
//文件夹的创建和删除
//1,创建文件夹
if(!is_dir("E:/shunping")){
    if(mkdir("E:/shunping")){
        echo "ok";
    }else{
        echo "error";
    }
}



