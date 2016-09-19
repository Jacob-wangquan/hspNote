<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php
    //接收window.open传递的用户名
    $username = $_GET['username'];
    //这里取出session保存的登录人的名字
    session_start();
    $loginuser = $_SESSION['loginuser'];

    ?>
    <script src="my.js"></script>
    <script>
        window.resizeTo(400,600);
        window.setInterval("getMessage()",5000);

        function getMessage() {
            var myxmlHttpRequest = getXmlHttpObject();
            if(myxmlHttpRequest){
                var url = "GetMessageController.php";
                var data = "&getter=<?php echo $loginuser; ?>&sender=<?php echo $username; ?>";

                myxmlHttpRequest.open("post",url,true);
                myxmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                //指定处理结果的函数
                myxmlHttpRequest.onreadystatechange = function () {
                    if(myxmlHttpRequest.readyState == 4){
                        if(myxmlHttpRequest.status == 200){

                        }
                    }
                }
                myxmlHttpRequest.send(data);
            }
        }

        function sendMessage() {
           var myxmlHttpRequest = getXmlHttpObject();
            if(myxmlHttpRequest){
                var url = "sendMessage.php";

                //js里嵌入PHP
                var data = "con="+$("con").value+"&getter=<?php echo $username; ?>&sender = <?php echo $loginuser; ?>";

//                alert(url+"--"+data);
                myxmlHttpRequest.open("post",url,true);
                myxmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                myxmlHttpRequest.onreadystatechange = function () {
                    if(myxmlHttpRequest.readyState == 4){
                        if(myxmlHttpRequest.status == 200){

                        }
                    }
                }
                //发送
                myxmlHttpRequest.send(data);
            }
        }
    </script>
</head>
<body>

<h3>chatRoom--<?php echo $loginuser; ?>在和<span><?php echo $username; ?></span>聊天</h3>
<textarea name="" id="" cols="30" rows="10"></textarea><br>
<input type="text" id="con"><br>
<input type="button" value="发送信息" onclick="sendMessage()">
</body>
</html>