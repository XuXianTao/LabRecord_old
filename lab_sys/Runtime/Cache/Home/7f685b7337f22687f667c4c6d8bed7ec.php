<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>lab_sys</title>
    <input type="hidden" name="uname" id="uname" value="<?php echo ($user['nam']); ?>" />
    <link rel="stylesheet" href="/sysulab/Public/lab_sys/css/header.css">
    <link rel="stylesheet" href="/sysulab/Public/lab_sys/css/nav.css">
    <link rel="stylesheet" href="/sysulab/Public/lab_sys/css/main_fb.css">
    <script type="text/javascript" src="/sysulab/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/sysulab/Public/lab_sys/js/init.js"></script>
    <script type="text/javascript" src="/sysulab/Public/lab_sys/js/ent.js"></script>
    <script>
        window.onbeforeunload = function() {
            return "确认退出？";
        }

        function onDestroy() {
            window.onbeforeunload = null;
        }
    </script>
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
            <div id="logo"><img src="/sysulab/Public/lab_sys/img/logo.jpg" alt="中山大学" /></div>
            <div id="welcome">欢迎！</div>
        </div>
    </div>
    <div id="navigation_wrapper">
        <div id="navigation">
            <div class="nav"><a href="main">主页</a></div>
            <div class="nav"><a href="fb">课堂反馈</a></div>
            <div class="nav"><a href="excp">异常反馈</a></div>
        </div>
    </div>
    <div id="main">

        <form id="form" action="fb_" method="POST" onsubmit="return onDestroy()">
            <fieldset>
                <legend>课堂反馈</legend>
                <div class="choice">知识点掌握程度：
                    <input name="knowledge" type="radio" value="1">完全掌握
                    <input name="knowledge" type="radio" value="2">大部分掌握
                    <input name="knowledge" type="radio" value="3">基本掌握
                    <input name="knowledge" type="radio" value="4">大部分没掌握
                    <input name="knowledge" type="radio" value="5">完全没掌握
                </div>
                <div class="btn_group">
                    <button id="btn1" class="btn" type="submit" name="btn_fb">提交</button>
                    <button id="btn2" class="btn" type="reset">重置</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>