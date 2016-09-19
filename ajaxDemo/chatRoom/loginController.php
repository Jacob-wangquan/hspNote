<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/8
 * Time: 9:55
 */
//接受用户名和密码
$loginUser = $_POST['username'];
$pwd = $_POST['password'];

if($pwd == "123"){
    //把用户的名字保存到session
    session_start();
    $_SESSION['loginuser'] = $loginUser;
    //跳转到好友列表
    header("Location:friendList.php");
}else{
    //不合法
    header("Location:login.php");
}

?>