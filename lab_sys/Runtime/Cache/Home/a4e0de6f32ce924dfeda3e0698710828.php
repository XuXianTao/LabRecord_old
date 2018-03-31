<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>lab_sys</title>
    <input type="hidden" name="uname" id="uname" value="<?php echo ($admin['nam']); ?>" />
    <script src="/lab_sys/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/init.js"></script>
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/header.css" />
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/nav.css" />
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/main_main.css" />
    <style type="text/css">
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

<body onload="init()">
    <div id="header_wrapper">
        <div id="header">
            <div id="logo"><img src="/lab_sys/Public/lab_sys/img/logo.jpg" alt="中山大学" /></div>
            <div id="welcome">欢迎！</div>
        </div>
    </div>
    <div id="navigation_wrapper">
        <div id="navigation">
            <div class="nav"><a href="main_m">主页</a></div>
            <div class="nav"><a href="fbsts">课堂反馈</a></div>
            <div class="nav"><a href="excpsts">异常情况</a></div>
        </div>
    </div>
    <div id="main">
        <div class="btn_wrapper">
            <a href="fbsts"><button id="btn1" name="btn_fb" class="btn">查看课堂反馈</button></a>
        </div>
        <div class="btn_wrapper">
            <a href="excpsts"><button id="btn2" name="btn_excp" class="btn">查看异常情况</button></a>
        </div>
    </div>
</body>

</html>