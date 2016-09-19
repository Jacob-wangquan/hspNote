<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="my.js"></script>
    <script>
        //响应点击新的聊天窗口
        function openChatRoom(obj) {
            window.open("chatRoom.php?username="+obj.innerText,"_blank");
        }
    </script>
    <style>
        li:hover{color:#9B410E; cursor: pointer;}
    </style>
</head>
<body>
<h3>好友列表</h3>
<ul>
    <li onclick="openChatRoom(this)">宋江</li>
    <li onclick="openChatRoom(this)">张飞</li>
    <li onclick="openChatRoom(this)">小倩</li>
</ul>
</body>
</html>

