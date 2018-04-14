<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>lab_sys</title>
    <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
    <script src="/lab_sys/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/init.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/del.js"></script>
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/header.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/nav.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/main_fbman.css" />
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
            <div class="nav"><a href="fbman">原始问卷管理</a></div>
            <div class="nav"><a href="fbman2">已发布问卷管理</a></div>
        </div>
    </div>
    <div id="main">
        <form action="/lab_sys/index.php/Home/Feedback/fbman" method="POST">
            <div class="btn_group">
                <button id="btn1" class="btn" type="submit" name="btn_fbcre" value="true">创建问卷</button>
                <!-- <button id="btn2" class="btn" type="submit" name="btn_fbrls" value="true">查看已发布问卷/反馈</button> -->
            </div>
            <table border="1">
                <caption>已经制定的问卷原型</caption>
                <tr>
                    <th>创建时间</th>
                    <th>问卷标题</th>
                    <th>类型</th>
                    <th>制定人</th>
                    <th>操作</th>
                </tr>
                <?php if(is_array($old)): $i = 0; $__LIST__ = $old;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($vo["cretim"]); ?></td>
                        <td><a href="?update=<?php echo ($vo["id"]); ?>"><?php echo ($vo["tit"]); ?></a></td>
                        <td><?php echo ($vo['typ']==0)?"问卷":"小测";?></td>
                        <td><?php echo ($vo["bnam"]); ?>(<?php echo ($vo["bid"]); ?>)</td>
                        <td>
                            <button type="submit" name="update" value="<?php echo ($vo["id"]); ?>">修改</button>
                            <button type="submit" name="publish" value="<?php echo ($vo["id"]); ?>">发布</button>
                            <button type="submit" name="delete" value="<?php echo ($vo["id"]); ?>" onclick="return del();">删除</button>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </form>
    </div>
</body>

</html>