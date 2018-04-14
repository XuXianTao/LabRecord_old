<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>lab_sys</title>
    <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
    <script src="/lab_sys/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/init.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/cfm.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/disp.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/set_val.js"></script>
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/header.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/nav.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/main_excpsts.css" />
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
    <div id="main">
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
        <table border="1">
            <caption>实验室异常情况</caption>
            <tr>
                <th>提交时间</th>
                <th>提交人</th>
                <th>位置</th>
                <th>异常描述</th>
                <th>处理人</th>
                <th>处理状态</th>
                <th>处理方式</th>
                <th>处理时间</th>
                <th></th>
            </tr>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td name="dat"><?php echo ($vo["dat"]); ?></td>
                    <td name="id"><?php echo ($vo["id"]); ?>&nbsp;<?php echo ($vo["nam"]); ?></td>
                    <td><?php echo ($vo["cla"]); ?>：<?php echo ($vo["num"]); ?>号机</td>
                    <td><?php echo $vo[pc]?"&nbsp;电脑":""; echo $vo[wire]?"&nbsp;网线":""; echo $vo[box]?"&nbsp;电路箱":""; echo $vo[oscp]?"&nbsp;示波器":""; echo $vo[gen]?"&nbsp;函数发生器":""; echo $vo[oth]?"<br/>[其他]：$vo[des]":"";?></td>
                    <td><?php echo ($vo["delid"]); ?> <?php echo ($vo["delnam"]); ?></td>
                    <td name="sts"><?php echo ($vo["sts"]); ?></td>
                    <td><?php echo ($vo["delway"]); ?></td>
                    <td><?php echo ($vo["deltim"]); ?></td>
                    <td>
                        <form action="/lab_sys/index.php/Home/Exception/deal_inc" method="POST" style="display: inline-block;">
                            <input type="hidden" name="vo_id1">
                            <input type="hidden" name="vo_dat1">
                            <input type="hidden" name="delWay1">
                            <button name="btn1" type="submit" onclick="return cfm_inc(event);">处理不成功</button>
                        </form>
                        <form action="/lab_sys/index.php/Home/Exception/deal_com" method="POST" style="display: inline-block;">
                            <input type="hidden" name="vo_id2">
                            <input type="hidden" name="vo_dat2">
                            <input type="hidden" name="delWay2">
                            <button name="btn2" type="submit" onclick="return cfm_com(event);">处理成功</button>
                        </form>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
    </div>
</body>

</html>