<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>lab_sys</title>
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/header.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/main_log.css">
    <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
    <script type="text/javascript" src="/lab_sys/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/lab_sys/Public/lab_sys/js/init.js"></script>
    <script type="text/javascript" src="/lab_sys/Public/lab_sys/js/ent.js"></script>
    <input type="hidden" name="ip" id="ip" />
    <script>
        var userAgent = navigator.userAgent;
        if (!!window.ActiveXObject || "ActiveXObject" in window || (userAgent.indexOf("compatible") > -1 && userAgent.indexOf("MSIE") > -1 && userAgent.indexOf("Opera") <= -1)) {
            alert('珍爱生命，远离IE\n推荐使用Chrome来进行上网');
            window.location.href = 'http://rj.baidu.com/soft/detail/14744.html?ald';
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
            <div id="logo"><img src="/lab_sys/Public/lab_sys/img/logo.jpg" alt="中山大学" /></div>
            <div id="welcome">欢迎！</div>
        </div>
    </div>
    <div id="main">
        <form id="login" action="/lab_sys/index.php/Home/Login/logm_" method="POST">
            <p>请输入职工号/学号：</p><input type="text" name="num" /><br>
            <button id="btn1" name="btn_logm" type="submit">登入</button>
        </form>
    </div>
</body>
<script>
    jQuery(document).ready(function() {
        jQuery("input").focus();
    });
</script>

</html>