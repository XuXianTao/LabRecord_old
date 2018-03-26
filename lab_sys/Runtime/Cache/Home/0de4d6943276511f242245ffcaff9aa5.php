<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>lab_sys</title>
<input type="hidden" name="uname" id="uname" value="<?php echo ($user['nam']); ?>" />
<script src="/sysulab/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
<script src="/sysulab/Public/lab_sys/js/init.js"></script>
<link rel="stylesheet" href="/sysulab/Public/lab_sys/css/header.css">
<link rel="stylesheet" href="/sysulab/Public/lab_sys/css/nav.css">
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
            <div class="nav"><a href="excp">异常情况</a></div>
        </div>
    </div>
    <div id="main">
        <table id="stat_data">
            <caption>统计数据</caption>
            <tr>
                <td>知识点掌握程度</td>
                <td>统计数据放这里</td>
            </tr>
        </table>
        <table id="stu_list">
            <caption>未上交名单</caption>
            <tr>
                <td>学号</td>
                <td>姓名</td>
            </tr>
        </table>
    </div>
</body>

</html>