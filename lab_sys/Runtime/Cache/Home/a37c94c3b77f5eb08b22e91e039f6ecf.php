<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>lab_sys</title>
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/header.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/main_log.css">
    <script src="/lab_sys/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/init.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/ent.js"></script>
    <script>
        var userAgent = navigator.userAgent;
        if (!!window.ActiveXObject || "ActiveXObject" in window || (userAgent.indexOf("compatible") > -1 && userAgent.indexOf("MSIE") > -1 && userAgent.indexOf("Opera") <= -1)) {
            alert('请勿使用IE内核浏览器访问该网站\n这将可能造成不可预料的后果\n推荐使用Chrome来进行访问');
        }
        jQuery(document).ready(function() {
            jQuery("input").focus();
        });
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

<body onload="init()">
    <div id="header_wrapper">
        <div id="header">
            <div id="logo"><img src="/lab_sys/Public/lab_sys/img/logo.jpg" alt="中山大学"></div>
            <div id="welcome">欢迎！</div>
        </div>
    </div>
    <div id="main">
        <form id="login" action="/lab_sys/index.php/Home/Login/logm_" method="POST">
            <p>请输入职工号/学号：</p><input name="id" type="text"><br>
            <button id="btn1" name="btn_logm" type="submit">登入</button>
        </form>
    </div>
</body>

</html>