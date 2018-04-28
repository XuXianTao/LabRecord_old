<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>lab_sys</title>
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/header.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/nav.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/main_fbman2.css">
    <script src="/lab_sys/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/init.js"></script>
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
            <div id="logo"><img src="/lab_sys/Public/lab_sys/img/logo.jpg" alt="中山大学"></div>
            <div id="welcome">欢迎！</div>
        </div>
    </div>
    <div id="nav_wrapper">
        <div id="nav">
            <div class="nav"><a href="main_m">主页</a></div>
            <div class="nav"><a href="excpsts">异常情况</a></div>
            <div class="nav"><a href="excpsta">故障统计</a></div>
            <div class="nav"><a href="fbman">原始问卷管理</a></div>
            <div class="nav"><a href="fbman2">已发布问卷管理</a></div>
        </div>
    </div>
    <div id="main">
        <form>
            <table border="1">
                <caption>已经发布的问卷</caption>
                <tr>
                    <th>发布时间</th>
                    <th>问卷标题</th>
                    <th>类型</th>
                    <th>发布人</th>
                    <th>课室</th>
                    <th>对应上课时段</th>
                    <th>截止时间</th>
                    <th></th>
                </tr>
                <?php if(is_array($data_fbrls)): $i = 0; $__LIST__ = $data_fbrls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($vo["rlstim"]); ?></td>
                        <td><?php echo ($vo["tit"]); ?></td>
                        <td><?php echo ($vo['typ']==0)?"问卷":"小测";?></td>
                        <td><?php echo ($vo["teanam"]); ?>(<?php echo ($vo["teaid"]); ?>)</td>
                        <td><?php echo ($vo["cla"]); ?></td>
                        <td>周<?php echo ($vo["schday"]); echo ($vo["schtim"]); ?></td>
                        <td><?php echo ($vo["ddl"]); ?></td>
                        <td>
                            <button name="btn_fbsts" type="submit" value="<?php echo ($vo["id"]); ?>">查看反馈情况</button>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </form>
    </div>
</body>

</html>