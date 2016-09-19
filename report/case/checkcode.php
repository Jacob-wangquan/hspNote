<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/19
 * Time: 11:11
 */

//绘制验证码
$checkCode = "";
for($i=0;$i<4;$i++){
    $checkCode.= dechex(rand(1,15));
}

//存入到
//session_start();
//$_SESSION['checkCode'] = $checkCode;

//创建画布
$im = imagecreatetruecolor(110,30 );
$red = imagecolorallocate($im, 255,255 ,200 );
$gaoRao = imagecolorallocate($im, rand(0,255),rand(0,255) ,rand(0,255) );

//画出干扰线
for($i=0;$i<20;$i++){
    imageline($im, rand(0,110),rand(0,30) , rand(0,110), rand(0,30),$gaoRao );
}

imagestring($im,rand(3,6) ,rand(0,20) ,rand(0,10) , $checkCode,$red );

header("content-type:image/png");
imagepng($im);

imagedestroy($im);