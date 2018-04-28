<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>lab_sys</title>
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/header.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/nav.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/main_excp.css">
    <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
    <script src="/lab_sys/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/init.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/input.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/dis_btn.js"></script>
    <input id="uname" name="uname" type="hidden" value="<?php echo ($user['nam']); ?>">
    <input id="ip" name="ip" type="hidden">
    <script>
        window.onbeforeunload = function() {
            return "确认退出？";
        }

        function onDestroy() {
            window.onbeforeunload = null;
        }
    </script>
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }
        
        * {
            font-family: Arial, sans-serif, "微软雅黑";
            font-size: large;
        }
        
        p {
            display: inline-block;
        }
        
        a {
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body onload="init();input()">
    <div id="header_wrapper">
        <div id="header">
            <div id="logo"><img src="/lab_sys/Public/lab_sys/img/logo.jpg" alt="中山大学"></div>
            <div id="welcome">欢迎！</div>
        </div>
    </div>
    <div id="nav_wrapper">
        <div id="nav">
            <div class="nav"><a href="main">主页</a></div>
            <div class="nav"><a href="fbstu">课堂反馈</a></div>
            <div class="nav"><a href="excp">异常反馈</a></div>
        </div>
    </div>
    <div id="main">
        <form id="form" action="excp_" method="POST" onsubmit="return onDestroy()">
            <fieldset>
                <legend>异常反馈</legend>
                <div class="choice">请选择异常仪器：<br>
                    <input name="pc"   type="checkbox" value="pc">电脑<br>
                    <input name="wire" type="checkbox" value="wire">导线<br>
                    <input name="box"  type="checkbox" value="box">电路箱<br>
                    <input name="oscp" type="checkbox" value="oscp">示波器<br>
                    <input name="gen"  type="checkbox" value="gen">函数发生器<br>
                    <input name="oth"  type="checkbox" value="oth">其他
                    <input name="des"  type="text" placeholder="输入文字进行描述" width="20px">
                </div>
                <div class="btn_group">
                    <button class="btn" id="btn1" name="btn_excp" type="submit">提交</button>
                    <button class="btn" id="btn2" type="reset">重置</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>