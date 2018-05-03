<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>lab_sys</title>
    <link rel="stylesheet" href="/Public/lab_sys/css/header.css">
    <link rel="stylesheet" href="/Public/lab_sys/css/nav.css">
    <link rel="stylesheet" href="/Public/lab_sys/css/main_main.css">
    <script src="/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script src="/Public/lab_sys/js/init.js"></script>
    <input id="uname" name="uname" type="hidden" value="<?php echo ($admin['nam']); ?>">
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
            <div id="logo"><img src="/Public/lab_sys/img/logo.jpg" alt="中山大学"></div>
            <div id="welcome">欢迎！</div>
        </div>
    </div>
    <div id="nav_wrapper">
        <div id="nav">
            <div class="nav"><a href="main_m">主页</a></div>
            <div class="nav"><a href="excpsts">异常情况</a></div>
            <div class="nav"><a href="excpsta">故障统计</a></div>
            <?php if(($admin['typ'] == 1)): ?><div class="nav"><a href="fbman">原始问卷管理</a></div>
                <div class="nav"><a href="fbman2">已发布问卷管理</a></div><?php endif; ?>
        </div>
    </div>
    <div id="main">
        <div class="btn_wrapper">
            <a href="excpsts"><button class="btn" id="btn1" name="btn_excpsts" onclick="window.location.href='excpsts'">查看异常情况</button></a>
        </div>
        <div class="btn_wrapper">
            <a href="excpsta"><button class="btn" id="btn2" name="btn_excpsta" onclick="window.location.href='excpsta'">查看故障统计</button></a>
        </div>
        <?php if(($admin['typ'] == 1)): ?><div class="btn_wrapper">
                <a href="fbman"><button class="btn" id="btn3" name="btn_fbman" onclick="window.location.href='fbman'">原始问卷管理</button></a>
            </div>
            <div class="btn_wrapper">
                <a href="fbman2"><button class="btn" id="btn4" name="btn_fbman2" onclick="window.location.href='fbman2'">已发布问卷管理</button></a>
            </div><?php endif; ?>
    </div>
</body>

</html>