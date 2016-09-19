<?php

require_once "MessageService.class.php";

//控制器
//接收信息
$sender = $_POST['sender'];
$getter = $_POST['getter'];
$con = $_POST['con'];

//把信息输出到一个文件
//file_put_contents("d:/mylog.log",$sender."--".$getter."--".$con."\r\n",FILE_APPEND);

//
$messageService = new MessageService();
$res = $messageService->addMessage($sender, $getter, $con);
if($res == 1){
 
}else {
 echo "err";
}
?>
