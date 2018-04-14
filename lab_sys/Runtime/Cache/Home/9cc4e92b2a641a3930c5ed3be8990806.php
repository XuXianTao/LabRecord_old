<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>lab_sys</title>
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/header.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/nav.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/main_bd.css">
    <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
    <script type="text/javascript" src="/lab_sys/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/lab_sys/Public/lab_sys/js/page_change.js"></script>
    <script type="text/javascript" src="/lab_sys/Public/lab_sys/js/init.js"></script>
    <input type="hidden" name="num_list" id="num_list" value="<?php echo ($num_list); ?>" />
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
            <div id="logo"><img src="/lab_sys/Public/lab_sys/img/logo.jpg" alt="中山大学" /></div>
            <div id="welcome">欢迎！</div>
        </div>
    </div>
    <div id="navigation_wrapper">
        <div id="navigation">
            <div class="nav"><a href="main_m">主页</a></div>
            <div class="nav"><a href="excpsts">异常情况</a></div>
            <div class="nav"><a href="excpsta">故障统计</a></div>
            <?php if(($admin['typ'] == 1)): ?><div class="nav"><a href="fbman">原始问卷管理</a></div>
                <div class="nav"><a href="fbman2">已发布问卷管理</a></div><?php endif; ?>
        </div>
    </div>
    <div id="main">
        <table border="1">
            <caption>机器故障统计表</caption>
            <tr>
                <th>课室</th>
                <th>座位号</th>
                <th>电脑故障数</th>
                <th>导线故障数</th>
                <th>电路箱故障数</th>
                <th>示波器故障数</th>
                <th>函数发生器故障数</th>
                <th>其他故障数</th>
            </tr>
            <?php if(is_array($list)): $i = 0; $__LIST__ = array_slice($list,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td name="cla"><?php echo ($vo["cla"]); ?></td>
                    <td name="num"><?php echo ($vo["num"]); ?></td>
                    <td><?php echo ($vo["pc"]); ?></td>
                    <td><?php echo ($vo["wire"]); ?></td>
                    <td><?php echo ($vo["box"]); ?></td>
                    <td><?php echo ($vo["oscp"]); ?></td>
                    <td><?php echo ($vo["gen"]); ?></td>
                    <td><?php echo ($vo["oth"]); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <br>
        <div>第<?php echo ($page); ?>页/共<?php echo ($num); ?>页</div>
        <br>
        <form action="/lab_sys/index.php/Home/Exception/excpsta" method="GET" style="display: inline-block;">
            <button name="btn" type="submit" value="<?php echo ($page-1); ?>">上一页</button>
            <button name="btn" type="submit" value="<?php echo ($page+1); ?>">下一页</button>
        </form>
    </div>
</body>


</html>