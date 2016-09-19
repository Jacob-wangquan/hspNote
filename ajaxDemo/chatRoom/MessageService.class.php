<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/8
 * Time: 14:58
 */
require_once 'SqlHelper.class.php';

class MessageService
{
//添加数据到数据库
function addMessage($sender,$getter,$con){
    //组织一个sql
    $sql = "insert into messages (sender,getter,content,sendTime) values('$sender','$getter','$con',now())";
    //创建sqlHelper对象
    $sqlHelper = new SqlHelper();
    return $sqlHelper->execute_dml($sql);
}
    //获取数据，并把数据组装好返回给客户端
    function getMessage($getter,$sender){
        $sql = "select * from messages where getter='$getter' and sender='$sender' and isGet=0";

        $sqlHelper = new SqlHelper();
        $array = $sqlHelper->execute_dql($sql);

        //定返回给客户端的信息格式
        $sqlHelper->close();
    }
}