<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>lab_sys</title>
    <link rel="stylesheet" href="/sysulab/Public/lab_sys/css/header.css">
    <link rel="stylesheet" href="/sysulab/Public/lab_sys/css/nav.css">
    <link rel="stylesheet" href="/sysulab/Public/lab_sys/css/main_fbrls.css">
    <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
    <script type="text/javascript" src="/sysulab/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/sysulab/Public/lab_sys/js/init.js"></script>
    <script type="text/javascript" src="/sysulab/Public/lab_sys/js/ent.js"></script>
    <input type="hidden" name="uname" id="uname" value="<?php echo ($admin['nam']); ?>" />
    <input type="hidden" name="ip" id="ip" />
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
            <div class="nav"><a href="main_m">主页</a></div>
            <div class="nav"><a href="excpsts">异常情况</a></div>
            <div class="nav"><a href="bd">故障统计</a></div>
            <div class="nav"><a href="fbman">问卷管理</a></div>
        </div>
    </div>
    <div id="main">
        <form id="form" action="fbrls_" method="POST" onsubmit="return onDestroy()">
            <fieldset>
                <legend>问卷发布：务必进行核对后再进行发布！</legend>
                <div class="choice">
                    上课课室：
                    <select name="cla">
                        <option value="C102">C102</option>
                        <option value="C103">C103</option>
                        <option value="C104">C104</option>
                        <option value="C303">C303</option>
                    </select>
                </div>
                <div class="choice">
                    上课时段：
                    <select name="timInt" size="">
                        <option>1 - 2节（8:00 - 9:40）</option>
                        <option>3 - 4节（10:00 - 12:00）</option>
                        <option>1 - 4节（8:00 - 12:00）</option>
                        <option>5 - 6节（14:20 - 16:00）</option>
                        <option>7 - 8节（16:20 - 18:00）</option>
                        <option>5 - 8节（14:20 - 18:00）</option>
                        <option>5 - 6节（14:20 - 16:00）</option>
                        <option>7 - 8节（16:20 - 18:00）</option>
                        <option>9 - 10节（19:00 - 20:40）</option>
                        <option>10 - 11节（20:50 - 21:30）</option>
                        <option>9 - 11节（19:00 - 21:30）</option>
                    </select>
                </div>
                <div class="btn_group">
                    <button id="btn1" class="btn" type="submit" name="btn_fbrls">发布</button>
                    <button id="btn2" class="btn" type="reset">重置</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>