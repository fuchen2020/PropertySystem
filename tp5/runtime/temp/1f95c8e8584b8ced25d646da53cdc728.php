<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"F:\TP5\PropertySystem\tp5\public/../application/index\view\index\clien.php";i:1511602217;}*/ ?>
<html>
<head>
    <script src='http://cdn.bootcss.com/socket.io/1.3.7/socket.io.js'></script>
</head>
<body>
<form action="" method="get">

    <input type="text" name="id" id="id">
    <button type="submit">发送</button>
</form>

</body>

</html>

<script>
    ws = new WebSocket("ws://127.0.0.1:2346");
    ws.onopen = function() {
        alert("连接成功");
        ws.send('18');
    };
    ws.onmessage = function(e) {
        alert("收到服务端的消息：" + e.data);
    };

    // socket连接后以uid登录
    socket.on('connect', function(){
        socket.emit('login', uid);
    });
    // 后端推送来消息时
    socket.on('new_msg', function(msg){
        console.log("收到消息："+msg);
    });
    // 后端推送来在线数据时
    socket.on('update_online_count', function(online_stat){
        console.log(online_stat);
    });

</script>

