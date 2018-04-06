<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>lab_sys</title>
<script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
<script src="/sysulab/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
<script src="/sysulab/Public/lab_sys/js/init.js"></script>
<link rel="stylesheet" href="/sysulab/Public/lab_sys/css/header.css">
<link rel="stylesheet" href="/sysulab/Public/lab_sys/css/nav.css">
<link rel="stylesheet" href="/sysulab/Public/lab_sys/css/main_fbsts.css" />
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
        <table id="stat_data" border="1">
            <caption>统计数据</caption>
            <tr>
                <td>标题</td>
                <td></td>
            </tr>
            <tr>
                <td>问题1</td>
                <td>问题1反馈</td>
            </tr>
        </table>
        <table id="stu_list" border="1">
            <caption>未上交名单</caption>
            <tr>
                <td>学号</td>
                <td>姓名</td>
                <td>上课课室</td>
                <td>任课教师</td>
                <td>上课时段</td>
            </tr>
        </table>
    </div>
</body>

</html>